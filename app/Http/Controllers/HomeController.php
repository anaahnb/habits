<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use App\Models\DiarioObjetivo;
use App\Models\Objetivo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Object_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = User::where('id', '=', Auth::id())->first();
        $objetivos = Objetivo::where('user_id', '=', Auth::id())->get();
        $diarios = Diario::where('user_id', '=', Auth::id())->get();

        // dd($request->diario_mes);

        if($request->diario_mes != null){
            $diarios = Diario::where('user_id', '=', Auth::id())->whereMonth('diario_data',$request->diario_mes)->get();
            $filtro = 1;
        }
        
        if($request->diario_ano != null){
            $diarios = Diario::where('user_id', '=', Auth::id())->whereYear('diario_data',$request->diario_ano)->get();
            $filtro = 1;
        }

        return view('users.home', compact('user', 'objetivos', 'diarios', 'filtro'));
    }
}

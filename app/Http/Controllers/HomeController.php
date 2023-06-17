<?php

namespace App\Http\Controllers;

use App\Models\Diario;
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
    public function index()
    {
        $user = User::where('id', '=', Auth::id())->first();
        $objetivos = Objetivo::where('user_id', '=', Auth::id())->paginate(10);
        $diarios = Diario::where('user_id', '=', Auth::id())->paginate();

        return view('users.home', compact('user', 'objetivos'));
    }
}

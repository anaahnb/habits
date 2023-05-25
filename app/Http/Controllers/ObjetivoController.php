<?php

namespace App\Http\Controllers;

use App\Models\Objetivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjetivoController extends Controller
{
    public function index(){
        $objetivos = Objetivo::where('user_id', '=', Auth::id());

        return view('objetivos.visualizar', compact('objetivos'));
    }

    public function store(Request $request){
        $objetivo = Objetivo::create($request->all());
        return redirect()->route('home')->with('sucesso','Objetivo cadastrado com sucesso.');
    }
}

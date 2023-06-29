<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObjetivoInserirRequest;
use App\Models\Objetivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObjetivoController extends Controller
{
    public function index(){
        $objetivos = Objetivo::where('user_id', '=', Auth::id())->paginate(10);

        return view('objetivos.visualizar', compact('objetivos'));
    }

    public function store(ObjetivoInserirRequest $request){
        $objetivo = Objetivo::create($request->all());
        return redirect()->route('home')->with('sucesso','Objetivo cadastrado com sucesso.');
    }

    public function update(Request $request, $objetivo_id){
        $objetivo = Objetivo::where("id", '=', $objetivo_id);
        $objetivo->update([
            'objetivo_nome' => $request->objetivo_nome,
        ]);

        return redirect()->back();
    }

    public function destroy($objetivo_id){
        $objetivo = Objetivo::where("objetivo_id", '=', $objetivo_id)->delete();
        return redirect()->back();
    }
}

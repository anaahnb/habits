<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class DiarioController extends Controller
{
    public function store(Request $request){
        // dd($request->user_id);
        $diarioData = Diario::where('diario_data', '=', date('Y-m-d'))->count();
        if($diarioData > 0){
            throw ValidationException::withMessages(['erro' => ['Você não pode criar mais de um diario no mesmo dia.']]);
        }
        $diario = Diario::create([
            'user_id' => Auth::id(),
            'diario_data' => date('Y-m-d'),
        ]);

        

        $diario->objetivos()->sync($request->objetivo);

        return redirect()->route('home');
    }
}

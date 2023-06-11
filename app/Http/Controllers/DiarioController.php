<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiarioController extends Controller
{
    public function store(Request $request){
        // dd($request->user_id);
        $diario = Diario::create([
            'user_id' => Auth::id(),
            'diario_data' => date('Y-m-d'),
        ]);

        $diario->objetivos()->sync($request->objetivo);

        return redirect()->route('home');
    }
}

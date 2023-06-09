<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Illuminate\Http\Request;

class DiarioController extends Controller
{
    public function store(Request $request){
        // dd($request->user_id);
        $diario = Diario::create([
            'objetivo_id' => $request->user_id,
            'diario_data' => date('Y-m-d'),
        ]);

        return redirect()->route('home');
    }
}

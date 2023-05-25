<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update([
            'name'=>$request->user_name,
            'email'=>$request->email,
        ]);

        return redirect()->route('home')->with('sucesso', 'Usuário editado com sucesso');
    }

    public function delete(){
        return view('users.excluir');
    }

    public function destroy(Request $request){
        $hashedPassword = Auth::find(1)->passsword;
        if(!Hash::check($request->senha, $hashedPassword)){            
            throw ValidationException::withMessages(['erro' => 'Senha invalida']);
        }

        $user = User::findOrFail(Auth::id());
        $user->delete();
        return redirect()->route('logout');
    }
}

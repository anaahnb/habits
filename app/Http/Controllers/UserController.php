<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        $user = User::findOrFail(Auth::id());
        $hashedPassword = Auth::user()->password;
        if(!Hash::check($request->password,$hashedPassword)){            
            throw ValidationException::withMessages(['erro' => 'Senha invalida']);
        }
        $user->delete();
        return redirect()->route('login');
    }
}

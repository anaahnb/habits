@extends('layouts.app')
@section('content')
    <div class="w-screen h-screen bg-gray-900 flex flex-col items-center justify-center text-gray-100">
        <header class="w-full max-w-sm">
            <span class="font-bold text-3xl text-gray-200">
                Excluir conta
            </span> 
        </header>

        <form action="{{route('user.destroy')}}" method="get" class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10">
            @csrf
            <label for="password" class="flex flex-col gap-3 text-gray-100 font-sans">
                Senha
                <input placeholder="Digite a sua senha" name='password' class="flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="password">
            </label>

            <p class="text-sm text-gray-400">Depois que sua conta for encerrada, todos os seus dados ficarão indisponíveis.</p>

            <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                Confirmar
            </button>
        </form>
    </div> 
@endsection
@extends('layouts.app')

@section('content')
<body class="bg-black">
    <div class="w-screen h-screen bg-gray-700 flex flex-col items-center justify-center text-gray-100">
        <header class="flex flex-col items-center">
            <span class="font-bold text-3xl text-gray-200">
                habits
            </span> 
            <p class="text-gray-400 font-sans">
                Registre-se e crie sua rotina!
            </p>
        </header>

        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10">
            @csrf

            <label for="name" class="flex flex-col gap-3 text-gray-100 font-sans">
                Nome
                <input name="name" placeholder="Digite o seu nome" class="@error('name') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="text">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="email" class="flex flex-col gap-3 text-gray-100 font-sans">
                Endereço de e-mail
                <input name="email" placeholder="Digite o seu e-mail" class="@error('email') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="text">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="password" class="flex flex-col gap-3 text-gray-100 font-sans">
                Senha
                <input id="password" placeholder="Digite uma senha" class="@error('password') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" name="password" type="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="password" class="flex flex-col gap-3 text-gray-100 font-sans">
                Confirme sua senha
                <input id="password-confirm" placeholder="Confirme a senha" class="flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="password" name="password_confirmation" required autocomplete="new-password">
            </label>

            <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                Registrar
            </button>
        </form>

        <footer class="flex flex-col items-center gap-2 mt-8">
            <a class="text-sm text-gray-400 hover:text-gray-200" href="{{ route('login') }}">Já possui uma conta? <span class="underline">Faça login!</span></a>
        </footer>
    </div> 
</body>
@endsection

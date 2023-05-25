@extends('layouts.app')

@section('content')
<body class="bg-black">
    <div class="w-screen h-screen bg-gray-900 flex flex-col items-center justify-center text-gray-100">
        <header class="flex flex-col items-center">
            <span class="font-bold text-3xl text-gray-200">
                habits
            </span> 
            <p class="text-gray-400 font-sans">
                Faça login e crie sua rotina!
            </p>
        </header>

        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10">
            @csrf
            <label for="email" class="flex flex-col gap-3 text-gray-100 font-sans">
                Endereço de e-mail
                <input id="email" name="email" placeholder="Digite o seu e-mail" class="@error('email') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="text" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="password" class="flex flex-col gap-3 text-gray-100 font-sans">
                Senha
                <input id="password" placeholder="Digite a sua senha" class="@error('password') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">Entrar</button>
        </form>

        <footer class="flex flex-col items-center gap-2 mt-8">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-400 underline hover:text-gray-200" href="{{ route('password.request') }}">Esqueceu a senha?</a>
            @endif
            <a class="text-sm text-gray-400 underline hover:text-gray-200" href="{{ route('register') }}">Não possui conta? Crie uma agora!</a>
        </footer>
    </div> 
</body>
@endsection

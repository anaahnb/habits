@extends('layouts.app')

@section('content')
<body class="bg-black">
    <div class="w-screen h-screen bg-gray-700 flex flex-col items-center justify-center text-gray-100">
        <form method="POST" action="{{ route('password.confirm') }}" class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10">
            @csrf

            <p class="text-sm text-gray-400">Por favor confirme sua senha antes de continuar</p>

            <label for="password" class="flex flex-col gap-3 text-gray-100 font-sans">
                Senha 
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>


            <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                Confirmar senha
            </button>

            <footer>
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-400 underline hover:text-gray-200" href="{{ route('password.request') }}">
                        Esqueceu a senha?
                    </a>
                @endif
            </footer>
                
        </form>
    </div>
</body>
@endsection

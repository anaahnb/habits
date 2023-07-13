@extends('layouts.app')

@section('content')
<body class="bg-black">
    <div class="w-screen h-screen bg-gray-900 flex flex-col items-center justify-center text-gray-100">
        
        <header class="w-full max-w-sm">
            <span class="font-bold text-3xl text-gray-200">
                Recuperação de senha
            </span> 
        </header>

        <form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email" class="flex flex-col gap-3 text-gray-100 font-sans">
                Endereço de e-mail

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="password" class="flex flex-col gap-3 text-gray-100 font-sanss">
                Senha
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

               
            <label for="password-confirm" class="flex flex-col gap-3 text-gray-100 font-sans">
                Confirmar senha
                <input id="password-confirm" type="password" class="form-control flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" name="password_confirmation" required autocomplete="new-password">
            </label>

                

            <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                Resetar senha
            </button>
        </form>    
    </div>
</body>
@endsection

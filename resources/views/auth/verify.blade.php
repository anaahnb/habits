@extends('layouts.app')

@section('content')
<body class="bg-black">
    <div class="w-screen h-screen bg-gray-900 flex flex-col items-center justify-center text-gray-100">

        <form class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            @if (session('resent'))
                <p class="text-sm text-gray-400">Um novo link de verificação foi enviado para o seu e-mail.</p>
            @endif

            <p class="text-sm text-gray-400">
                Antes de prosseguir, por favor cheque seu e-mail para acessr o link de verificação. Se
                você não recebeu, clique no botão abaixo.
            </p>

            <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                Enviar novamente
            </button>
        </form>       
    </div>
</body>
@endsection

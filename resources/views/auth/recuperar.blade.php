@extends('layouts.app')

@section('content')
<body class="bg-black">
    <div class="w-screen h-screen bg-gray-700 flex flex-col items-center justify-center text-gray-100">

        <form action="" class="flex flex-col gap-4 items-stretch w-full max-w-sm mt-10">

            <label for="email" class="flex flex-col gap-3 text-gray-100 font-sans">
                Endereço de e-mail
                <input placeholder="Digite o seu e-mail" class="flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="text">
            </label>

            <p class="text-sm text-gray-400">Enviaremos um e-mail como as intruções para resetar a sua senha!</p>


            <button class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                Enviar
            </button>
        </form>
    </div> 
</body>
@endsection

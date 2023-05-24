@extends('layouts.app')

@section('content')
<div class="w-screen h-screen bg-gray-900 flex flex items-center justify-center">
    <header class="flex items-center gap-8">
        <span class="font-bold text-3xl text-gray-200">
            habits
        </span> 

        <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white border-solid border-2 border-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-56 px-4 py-2.5 inline-flex justify-between items-center" type="button">
            Menu 
            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>

        <a href="" class="text-white border-solid border-2 border-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
            <svg class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.125 10H16.875" stroke="#00FFB5" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 3.125V16.875" stroke="#00FFB5" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Novo objetivo 
        </a>
        <div id="dropdownDivider" class="z-10 hidden bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="py-2">
                <span href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                    {{$user->name}}
                </span>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar perfil</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visualizar objetivos</a></li>
            </ul>
            <div class="py-2">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sair</a>
            </div>
        </div>
    </header>
</div>        
@endsection

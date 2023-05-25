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

        <button data-modal-target="modalInserirObjetivo" data-modal-toggle="modalInserirObjetivo" class="text-white border-solid border-2 border-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">
            <svg class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.125 10H16.875" stroke="#00FFB5" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 3.125V16.875" stroke="#00FFB5" stroke-width="1.88" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Novo objetivo
        </button>

            <div id="dropdownDivider" class="w-56 z-10 hidden bg-gray-700 divide-y divide-gray-400 rounded-lg shadow w-44">
                <div class="py-2">
                    <span class="block px-4 pt-2 text-sm text-gray-200"> {{ $user->name }} </span>
                    <span class="block px-4 pb-2 text-sm text-gray-400"> {{ $user->email }} </span>

                </div>
                <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownDividerButton">
                    <li>
                        <a data-modal-target="modalEditarPerfil" data-modal-toggle="modalEditarPerfil" class="cursor-pointer inline-flex px-4 py-2">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 2.75C6.75 2.33579 6.41421 2 6 2C5.58579 2 5.25 2.33579 5.25 2.75V4.00879C3.43368 4.13698 2 5.65106 2 7.5V8.5C2 10.3489 3.43368 11.863 5.25 11.9912L5.25 17.25C5.25 17.6642 5.58579 18 6 18C6.41421 18 6.75 17.6642 6.75 17.25L6.75 11.9912C8.56632 11.863 10 10.3489 10 8.5V7.5C10 5.65106 8.56632 4.13698 6.75 4.00879V2.75ZM8.5 7.5C8.5 6.39543 7.60457 5.5 6.5 5.5H5.5C4.39543 5.5 3.5 6.39543 3.5 7.5V8.5C3.5 9.60457 4.39543 10.5 5.5 10.5H6.5C7.60457 10.5 8.5 9.60457 8.5 8.5V7.5Z" fill="#9CA3AF"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.25 2.75L13.25 8.00879C11.4337 8.13698 10 9.65106 10 11.5V12.5C10 14.3489 11.4337 15.863 13.25 15.9912L13.25 17.25C13.25 17.6642 13.5858 18 14 18C14.4142 18 14.75 17.6642 14.75 17.25L14.75 15.9912C16.5663 15.863 18 14.3489 18 12.5V11.5C18 9.65106 16.5663 8.13698 14.75 8.00879L14.75 2.75C14.75 2.33579 14.4142 2 14 2C13.5858 2 13.25 2.33579 13.25 2.75ZM13.5 9.5C12.3954 9.5 11.5 10.3954 11.5 11.5V12.5C11.5 13.6046 12.3954 14.5 13.5 14.5H14.5C15.6046 14.5 16.5 13.6046 16.5 12.5V11.5C16.5 10.3954 15.6046 9.5 14.5 9.5H13.5Z" fill="#9CA3AF"/></svg>
                            Editar perfil
                        </a>
                    </li>
                    <li>
                        <a data-modal-target="modalVisualizarObjetivos" data-modal-toggle="modalVisualizarObjetivos" class="cursor-pointer inline-flex px-4 py-2">
                            <svg class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5303 4.46967C10.2374 4.17678 9.76256 4.17678 9.46967 4.46967L4.6967 9.24264C4.40381 9.53553 4.40381 10.0104 4.6967 10.3033C4.98959 10.5962 5.46447 10.5962 5.75736 10.3033L10 6.06066L14.2426 10.3033C14.5355 10.5962 15.0104 10.5962 15.3033 10.3033C15.5962 10.0104 15.5962 9.53553 15.3033 9.24264L10.5303 4.46967ZM6 16.25C5.58579 16.25 5.25 16.5858 5.25 17C5.25 17.4142 5.58579 17.75 6 17.75V16.25ZM10.75 13V5H9.25V13H10.75ZM9.25 13C9.25 14.7949 7.79493 16.25 6 16.25V17.75C8.62335 17.75 10.75 15.6234 10.75 13H9.25Z" fill="#9CA3AF"/><path d="M4 3H16" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round"/></svg>
                            Visualizar objetivos</a>
                        </li>
                </ul>
                <div class="py-2">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="inline-flex items-center  px-4 py-2 text-sm text-gray-200">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 10.7C13.3866 10.7 13.7 10.3866 13.7 10C13.7 9.6134 13.3866 9.3 13 9.3L13 10.7ZM2.50503 9.50502C2.23166 9.77839 2.23166 10.2216 2.50503 10.495L6.9598 14.9497C7.23316 15.2231 7.67638 15.2231 7.94975 14.9497C8.22311 14.6764 8.22311 14.2332 7.94975 13.9598L3.98995 10L7.94975 6.0402C8.22312 5.76683 8.22312 5.32362 7.94975 5.05025C7.67638 4.77688 7.23317 4.77688 6.9598 5.05025L2.50503 9.50502ZM13 9.3L3 9.3L3 10.7L13 10.7L13 9.3Z" fill="#9CA3AF"/><path d="M10 6.5V5.5C10 4.11929 11.1193 3 12.5 3H14.5C15.8807 3 17 4.11929 17 5.5V14.5C17 15.8807 15.8807 17 14.5 17H12.5C11.1193 17 10 15.8807 10 14.5V14" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round"/></svg>
                        Sair
                    </button>
                </form>
                </div>
            </div>
    </header>

    <!-- Modal -->
    @include('objetivos.inserir')
    @include('users.editar')

</div>        
@endsection

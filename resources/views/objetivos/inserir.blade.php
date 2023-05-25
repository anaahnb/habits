<div id="modalInserirObjetivo" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-sm max-h-full">
        <div class="relative bg-gray-700 rounded-lg shadow">
            <div class="flex items-start justify-between p-4 rounded-t">
                <h3 class="text-3xl font-extrabold text-gray-200">
                    Criar objetivo
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalInserirObjetivo">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Fechar modal</span>
                </button>
            </div>
            <form {{-- action="{{ route('objetivo.store') }}" --}}  method="POST">
            @csrf
                <div class="p-6 space-y-6">
                    <label for="objetivo_nome" class="flex flex-col gap-3 text-gray-200 font-sans">
                        Qual o seu comprometimento?
                        <input name="objetivo_nome" placeholder="Exercícios, dormir bem, etc..." class="@error('objetivo_nome') is-invalid @enderror flex items-center gap-3 h-12 py-4 px-3 rounded outline-none bg-gray-900 text-gray-200 font-normal w-full placeholder:text-gray-200" type="text">
                        @error('objetivo_nome')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
    
                    <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded font-semibold text-black text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                        Confirmar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

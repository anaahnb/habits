<div id="modalEditarPerfil" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-gray-700 rounded-lg shadow">
            <div class="flex items-start justify-between p-4 rounded-t">
                <h3 class="text-3xl font-extrabold text-gray-200">
                    Editar perfil
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalEditarPerfil">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Fechar modal</span>
                </button>
            </div>
            <form action="{{route('user.update')}}" method="POST" class="flex flex-col gap-4 items-stretch w-full max-w-md mt-10">
                @csrf
                <div class="p-6 space-y-6">
                    <label for="nome" class="flex flex-col gap-3 text-gray-100 font-sans">
                        Nome
                        <input value="{{$user->name}}" name="user_name" class="flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="text">
                    </label>
    
                    <label for="email" class="flex flex-col gap-3 text-gray-100 font-sans">
                        Endereço de e-mail
                        <input value="{{$user->email}}" name="email" class="flex items-center gap-3 h-12 py-4 px-3 rounded bg-gray-600 w-full focus-within:ring-2 ring-cyan-300 placeholder:text-gray-400" type="text">
                    </label>
    
                    <label for="password" class="flex flex-col text-gray-100 font-sans">
                        Senha
                        <a class="text-sm text-gray-400 underline hover:text-gray-200" href="{{ route('password.request') }}">Alterar sua senha</a>
                    </label>
    
                    <div class="flex gap-3">
                        <a href="{{route('user.delete')}}" class="flex gap-3 border border-green-400 text-gray-200 items-center justify-center mt-12 py-3 px-4 rounded font-semibold text-sm w-full transition-colors">
                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.6923 3.07692H13.8465V2.30769C13.8458 1.69587 13.6025 1.1093 13.1699 0.676671C12.7372 0.244045 12.1507 0.000691718 11.5388 0H6.92345C6.31163 0.000691718 5.72506 0.244045 5.29243 0.676671C4.85981 1.1093 4.61645 1.69587 4.61576 2.30769V3.07692H0.769231C0.565218 3.07692 0.369561 3.15797 0.225303 3.30223C0.0810439 3.44648 0 3.64214 0 3.84615C0 4.05017 0.0810439 4.24582 0.225303 4.39008C0.369561 4.53434 0.565218 4.61538 0.769231 4.61538H1.53846V18.4615C1.53893 18.8694 1.70117 19.2605 1.98958 19.5489C2.278 19.8373 2.66904 19.9995 3.07692 20H15.3846C15.7925 19.9995 16.1835 19.8373 16.472 19.5489C16.7604 19.2605 16.9226 18.8694 16.9231 18.4615V4.61538H17.6923C17.8963 4.61538 18.092 4.53434 18.2362 4.39008C18.3805 4.24582 18.4615 4.05017 18.4615 3.84615C18.4615 3.64214 18.3805 3.44648 18.2362 3.30223C18.092 3.15797 17.8963 3.07692 17.6923 3.07692ZM6.15422 2.30769C6.15446 2.10375 6.23557 1.90823 6.37978 1.76402C6.52399 1.61981 6.71951 1.53869 6.92345 1.53846H11.5388C11.7428 1.53869 11.9383 1.61981 12.0825 1.76402C12.2267 1.90823 12.3078 2.10375 12.3081 2.30769V3.07692H6.15422V2.30769ZM15.3846 18.4615H3.07692V4.61538H15.3846V18.4615ZM7.69268 8.46154V14.6154C7.69268 14.8194 7.61164 15.0151 7.46738 15.1593C7.32312 15.3036 7.12747 15.3846 6.92345 15.3846C6.71944 15.3846 6.52378 15.3036 6.37953 15.1593C6.23527 15.0151 6.15422 14.8194 6.15422 14.6154V8.46154C6.15422 8.25753 6.23527 8.06187 6.37953 7.91761C6.52378 7.77335 6.71944 7.69231 6.92345 7.69231C7.12747 7.69231 7.32312 7.77335 7.46738 7.91761C7.61164 8.06187 7.69268 8.25753 7.69268 8.46154ZM12.3081 8.46154V14.6154C12.3081 14.8194 12.227 15.0151 12.0828 15.1593C11.9385 15.3036 11.7429 15.3846 11.5388 15.3846C11.3348 15.3846 11.1392 15.3036 10.9949 15.1593C10.8506 15.0151 10.7696 14.8194 10.7696 14.6154V8.46154C10.7696 8.25753 10.8506 8.06187 10.9949 7.91761C11.1392 7.77335 11.3348 7.69231 11.5388 7.69231C11.7429 7.69231 11.9385 7.77335 12.0828 7.91761C12.227 8.06187 12.3081 8.25753 12.3081 8.46154Z" fill="#00FFB5"/></svg>
                            <span>Excluir conta</span>
                        </a>
                        <button type="submit" class="mt-12 py-3 px-4 bg-green-400 rounded text-center font-semibold text-gray-200 text-sm w-full transition-colors hover:bg-emerald-400 focus:ring-2 ring-white">
                            Salvar alterações
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


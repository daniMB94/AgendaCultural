<x-layout-admin>

    <!-- Content -->
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Creación de un nuevo usuario</h2>

                </div>

            </div>

            <div class="flex items-center mt-4 gap-x-3">


                <button id="enviarFormulario"
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path
                            d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">
                        </path>
                    </svg>


                    <span>Guardar</span>
                </button>

            </div>
        </div>

        <!-- component -->
        <form id="formulario" method="post" action="{{route('admin.storeUser')}}">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-first-name">
                            Nombre
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                            id="grid-first-name" type="text" name="nombre" required autofocus placeholder="nombre">

                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-last-name">
                            Apellidos
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-last-name" type="text" name="apellidos" required autofocus placeholder="apellidos">
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-last-name">
                            edad
                        </label>

                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-last-name" type="number" name="edad" required autofocus placeholder="18">

                    </div>
                    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-first-name">
                            telefono
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                            id="grid-first-name" type="text" name="telefono" required autofocus placeholder="telefono">


                    </div>
                    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-last-name">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-last-name" type="email" name="email" required autofocus placeholder="email">
                    </div>

                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-zip">
                            Dirección
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-zip" type="text" name="direccion" required autofocus placeholder="direccion">
                    </div>
                    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-city">
                            Ciudad
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-city" type="text" name="ciudad" required autofocus placeholder="ciudad">
                    </div>
                    <div class="md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-state">
                            Rol
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                id="rol" name="rol" required autofocus>
                                <option value="asistente">Asistente
                                </option>
                                <option value="empresa">Empresa
                                </option>
                                <option value="admin">Administrador
                                </option>
                            </select>
                            <div
                                class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-city">
                            Password
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="grid-city" type="password" name="password" required autofocus placeholder="*********">
                    </div>

                </div>
                <div class="-mx-3 md:flex mb-6" id="empresas" style="display: none">
                    <div class="md:w-full px-3">

                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-state">
                            Empresa
                        </label>
                        <div class="relative">

                            <select
                                class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                name="empresa" id="empresaSeleccionada" autofocus>
                                @foreach($empresas as $empresa)
                                @if($empresa->nombre != 'admin' && $empresa->nombre != 'asistente')

                                <option value="{{$empresa->id}}">{{$empresa->nombre}}
                                </option>
                                @endif
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-3 text-grey-dark text-xs italic">Selecciona la empresa asociada al usuario</p>
                    </div>
                </div>

            </div>
        </form>
    </section>

    <!-- End Content -->
</x-layout-admin>
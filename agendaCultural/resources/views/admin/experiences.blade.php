<x-layout-admin>
    <!-- Content -->

    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Eventos</h2>

                    <span
                        class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{$totalExperiences}}
                        creados</span>
                </div>

            </div>

            <div class="flex items-center mt-4 gap-x-3">


                <button
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <a class="flex items-center justify-center" href=" {{ route('admin.eventCreateForm') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M21 4h-3V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v1H3a1 1 0 0 0-1 1v3c0 4.31 1.8 6.91 4.82 7A6 6 0 0 0 11 17.91V20H9v2h6v-2h-2v-2.09A6 6 0 0 0 17.18 15c3-.1 4.82-2.7 4.82-7V5a1 1 0 0 0-1-1zM4 8V6h2v6.83C4.22 12.08 4 9.3 4 8zm14 4.83V6h2v2c0 1.3-.22 4.08-2 4.83z">
                            </path>
                        </svg>


                        <span>Crear experiencia</span></a>
                </button>
            </div>
        </div>

        <div class="mt-6 md:flex md:items-center md:justify-between">



        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">

                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-3 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Nombre
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Fechas
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Descripcion
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Precio
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Empresa</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Opciones</th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                @foreach($experiencias as $experiencia)

                                <tr>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <h2 class="font-medium text-gray-800 dark:text-white ">
                                                {{$experiencia->nombre}}
                                            </h2>

                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <p>{{$experiencia->fechaInicio}}</p>
                                            <p>{{$experiencia->fechaFin}}</p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <p class="text-gray-500 dark:text-gray-400">
                                                {{$experiencia->descripcionCorta}}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <p>{{$experiencia->precio}}</p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <p>{{$experiencia->empresa->nombre}}</p>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <a href="{{ route('admin.experienceDelete', ['id' => $experiencia]) }}">Eliminar
                                                Experiencia</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$experiencias->links()}}
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- End Content -->
</x-layout-admin>
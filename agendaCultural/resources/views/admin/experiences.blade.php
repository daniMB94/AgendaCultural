<x-layout-admin>
    <!-- Content -->

    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Experiencias</h2>

                    <span
                        class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{$totalExperiences}}
                        creadas</span>
                </div>

            </div>

            <div class="flex items-center mt-4 gap-x-3">


                <button
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <a class="flex items-center justify-center" href=" {{ route('admin.experienceNewForm') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>



                        <span class="ms-2">Crear experiencia</span></a>
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
                                        Imagen
                                    </th>
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
                                            <img src="{{asset('images/'. $experiencia->imagen)}}"
                                                class="font-medium text-gray-800 dark:text-white ">

                                        </div>
                                    </td>
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
                                            <a href="{{ route('admin.experienceDelete', ['id' => $experiencia]) }}"
                                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Eliminar
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
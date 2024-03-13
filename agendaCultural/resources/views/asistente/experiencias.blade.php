<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Experiencias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-------------------------------------------------->
                    <table class="border-collapse border border-slate-400 w-full divide-y-8">


                        @foreach($experiencias as $experiencia)



                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <h1 class="overline decoration-indigo-500 m-3 text-2xl">
                                        {{$experiencia->empresa->nombre}}
                                    </h1>
                                </td>
                                <td>
                                    <p>
                                        {{$experiencia->empresa->telefono}}
                                    </p>
                                    <p>{{$experiencia->empresa->email}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="border border-slate-300 bg-green-400 text-3xl font-extrabold text-white text-center">
                                    <p>Fecha de inicio: {{$experiencia->fechaInicio}}</p>
                                    <br>
                                    <p>Fecha de Fin: {{$experiencia->fechaFin}}</p>
                                </td>
                                <td class="border border-slate-300">
                                    <img class="w-full h-48 object-cover"
                                        src="{{ asset('images/' . $experiencia->imagen) }}"
                                        alt="Descripción de la imagen">
                                </td>
                                <td class="border border-slate-300">{{$experiencia->descripcionCorta}}</td>
                                <td class="border border-slate-300"><a href="{{$experiencia->empresa->web}}"
                                        class="text-indigo-700 underline">Web de
                                        inscripcion</a></td>
                            </tr>
                        </tbody>


                        @endforeach
                    </table>

                    <!-------------------------------------------------->

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
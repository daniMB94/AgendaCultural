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
                    <table class="border-collapse border border-slate-400 w-full">


                        @foreach($experiencias as $experiencia)



                        <tbody>
                            <tr>
                                <td class="border border-slate-300">
                                    Fecha de inicio: {{$experiencia->fechaInicio}}
                                </td>
                                <td class="border border-slate-300" style="width: 300px; height: 100px;">
                                    <img src="{{ asset('images/' . $experiencia->imagen) }}" style="width: 100%; height: auto;" alt="Descripción de la imagen">
                                </td>
                                <td class="border border-slate-300">$experiencia->descripcionCorta</td>
                                <td class="border border-slate-300">MAS INFO</td>
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
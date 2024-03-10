<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis inscripciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($inscripciones as $inscripcion)

                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover"
                            src="{{ asset('images/' . $inscripcion->evento->imagen) }}" alt="Sunset in the mountains">

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $inscripcion->evento->nombre }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $inscripcion->evento->descripcion }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2 flex flex-col items-center justify-center">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $inscripcion->evento->categoria->nombre }}</span>
                            <p>Entradas reservadas: <span
                                    class="inline-block bg-indigo-400 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $inscripcion->numEntradas }}</span>
                            </p>

                            <x-modal>
                                <x-slot name="name">{{ 'inscripcion-' . $inscripcion->id }}</x-slot>

                                <div class="w-full p-2 flex flex-col items-center justify-center">

                                    <!--DETALLES DEL EVENTO-->
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Cuando</h1>

                                        <p>{{$inscripcion->evento->fecha}}</p>
                                        <p>{{$inscripcion->evento->hora}}</p>

                                    </div>
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Donde</h1>

                                        <p>{{$inscripcion->evento->ciudad}}</p>
                                        <p>{{$inscripcion->evento->direccion}}</p>

                                    </div>
                                    <div class="my-3 bg-gray-100 flex flex-col items-center">
                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Aforo máximo</h1>

                                        <p>{{$inscripcion->evento->aforoMax}}</p>

                                    </div>
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Estado:
                                        {{ $inscripcion->evento->estado }}</span>
                                </div>
                            </x-modal>

                            <button
                                class="inline-block bg-indigo-200 rounded border-2 border-indigo-400 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                x-data
                                x-on:click="$dispatch('open-modal', '{{ 'inscripcion-' . $inscripcion->id }}')">info</button>

                        </div>
                    </div>

                    @endforeach
                </div>
                {{ $inscripciones->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
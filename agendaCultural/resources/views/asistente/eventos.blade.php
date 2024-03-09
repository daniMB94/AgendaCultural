<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($eventos as $evento)

                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('images/' . $evento->imagen) }}" alt="Sunset in the mountains">

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $evento->nombre }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $evento->descripcion }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2 flex flex-row justify-between">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $evento->categoria->nombre }}</span>
                            <x-modal>
                                <x-slot name="name">{{ 'modal-' . $evento->id }}</x-slot>

                                <div class="w-full p-2 flex justify-center">

                                    <form class="w-2/3" method="POST" action="{{ route('inscripcion.store') }}" enctype="multipart/form-data">
                                        @csrf

                                        <h1 class="overline decoration-indigo-500 m-3 text-2xl">Formulario de
                                            inscripción</h1>

                                        <!-- Numero de Entradas -->
                                        <div>
                                            <x-input-label for="numEntradas" :value="__('Numero de Entradas')" />
                                            <x-text-input id="numEntradas" class="block mt-1 w-full border-indigo-400" type="number" name="numEntradas" :value="old('numEntradas')" required autofocus autocomplete="numEntradas" />
                                            <x-input-error :messages="$errors->get('numEntradas')" class="mt-2" />
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                                        <div class="m-3">
                                            <button class="inline-block bg-green-200 rounded border-solid border-2 border-green-700 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2" type="submit">Confirmar Inscripción</button>
                                        </div>


                                    </form>
                                </div>
                            </x-modal>

                            <button class="inline-block bg-green-200 rounded border-2 border-green-700 px-1 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2" x-data x-on:click="$dispatch('open-modal', '{{ 'modal-' . $evento->id }}')">Inscribirse</button>

                        </div>
                    </div>

                    @endforeach
                </div>
                {{ $eventos->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
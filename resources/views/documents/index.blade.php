<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="w-full mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">
                <div class="flex items-center text-center">
                    <div class="shadow-md  hover:text-gray-400">
                        <img src="{{ asset('img/logoSantarena.png') }}" class="w-36 h-36 object-cover object-center">
                        <a href="{{ asset('documents/estructura/Material_Santarena_Estructura.zip') }}">
                            <i class="fas fa-download mt-4 text-lg"></i>
                            <p class="text-gray-600  hover:text-gray-400">Descargar recursos</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

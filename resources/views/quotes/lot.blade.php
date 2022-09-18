<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $development->name }} {{ __($lot->clave) }}
        </h2>
    </x-slot>

    <div class="p-10">
        <div class="max-w-full mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-16">
                @livewire('quote-imperio-maya-component', ['development'=> $development,'lead' => $lead,'lot' => $lot])
            </div>
        </div>
    </div>
</x-app-layout>

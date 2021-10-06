<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="w-full mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('reports.index')
            </div>
        </div>
    </div>
</x-app-layout>

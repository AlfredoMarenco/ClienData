<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('System config') }}
        </h2>
    </x-slot>

    <div>
        <div class="w-full mx-auto">
            <div class="bg-white overflow-hidden shadow-xl">
                @livewire('system-config')
            </div>
        </div>
    </div>
</x-app-layout>

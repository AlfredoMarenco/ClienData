<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="w-full mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-2">
                    @livewire('leads.lead-add')
                </div>
                <div class="px-2">
                    @livewire('leads.leads-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

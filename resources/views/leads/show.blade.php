<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lead Information') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="w-full mx-auto sm:px-6 lg:px-3">
            <div class="bg-gray-100  shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-white rounded-md shadow-lg">
                        @livewire('lead-description', ['lead' => $lead], key('description'.$lead->id))
                    </div>
                    <div class="bg-gray-200 rounded-2xl col-span-2 shadow-lg">
                        @livewire('lead-events', ['lead' => $lead], key('events'.$lead->id))
                    </div>
                    <div class="bg-gray-200 rounded-2xl shadow-lg">
                        @livewire('lead-tasks', ['lead' => $lead], key('tasks'.$lead->id))
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

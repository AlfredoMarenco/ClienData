<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="w-full mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{open:false}" class="flex justify-end py-4 px-4">
                    <a x-on:click="open=!open"
                        class="bg-gray-800 px-3 py-2 rounded-lg font-bold text-white cursor-pointer hover:bg-gray-700">
                        <i class="fas fa-user-plus mr-2 cursor-pointer"></i>Agregar nuevo</a>

                    <div x-show="open" class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title"
                        role="dialog" aria-modal="true"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform"
                        x-transition:enter-end="opacity-100 transform"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform"
                        x-transition:leave-end="opacity-0 transform">
                        <div class="absolute inset-0 overflow-hidden">

                            <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                aria-hidden="true"></div>

                            <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">

                                <div class="relative w-screen max-w-4xl">

                                    <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
                                        <button x-on:click="open=!open"
                                            class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                            <span class="sr-only">Close panel</span>
                                            <!-- Heroicon name: outline/x -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
                                        <div class="px-4 sm:px-6">
                                            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                                Nuevo lead
                                            </h2>
                                        </div>
                                        <div class="mt-6 relative flex-1 px-4 sm:px-6">
                                            <!-- Replace with your content -->
                                            <div class="absolute inset-0 px-4 sm:px-6">
                                                <div class="h-full" aria-hidden="true">
                                                    {{-- Formulario para agregar lead nuevo --}}
                                                </div>
                                            </div>
                                            <!-- /End replace -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    @livewire('leads-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

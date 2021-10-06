<div>
    <div>
        {{-- Vertical Navigation --}}
        <div class="w-full">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="grid grid-cols-5 gap-4">
                        <div class="bg-gray-100 shadow-lg">
                            <div class="py-2 pace-y-1">
                                <x-vertical-nav-link class="cursor-pointer" color="green"
                                    wire:click="setNavigation('leads')" :active="$leads">
                                    {{ __('Leads') }}
                                </x-vertical-nav-link>
                                {{-- <x-vertical-nav-link class="cursor-pointer" color="green"
                                    wire:click="setNavigation('leads')" :active="$leads">
                                    {{ __('Tasks') }}
                                </x-vertical-nav-link> --}}
                            </div>
                        </div>
                        <div class="col-span-4 shadow-lg">
                            @if ($leads)
                                @livewire('reports.reports-leads')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

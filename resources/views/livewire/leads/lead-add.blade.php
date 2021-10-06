<div>
    <div x-data="{open:false}" class="flex justify-end py-4 px-4">
        <a x-on:click="open=!open"
            class="bg-gray-800 px-3 py-2 rounded-lg font-bold text-white cursor-pointer hover:bg-gray-700">
            <i class="fas fa-user-plus mr-2 cursor-pointer"></i>Agregar nuevo</a>

        <div x-show="open" class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog"
            aria-modal="true" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 transform translate-x-full"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform translate-x-full">
            <div class="absolute inset-0 overflow-hidden">

                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">

                    <div class="relative w-screen max-w-3xl">

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
                                @if ($success)
                                    <div class="text-center">
                                        <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                        <p class="text-2xl font-bold py-4">Lead creado con éxito...</p>
                                        <div class="mx-auto mt-6">
                                            <a href="{{ route('leads.index') }}"
                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="absolute inset-0 px-4 sm:px-6">
                                        <div class="h-full" aria-hidden="true">
                                            <div>
                                                <div class="text-center">
                                                    <div wire:loading wire:target="storeLead">
                                                        <i
                                                            class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                                        <p class="text-2xl font-bold py-4">Cargando información del
                                                            lead...</p>
                                                        <div class="mx-auto mt-6">
                                                            <a href="{{ route('leads.index') }}"
                                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form wire:submit.prevent="storeLead" wire:loading.remove>
                                                    <div class="shadow overflow-hidden sm:rounded-md">
                                                        <div class="px-4 py-5 bg-white sm:p-6">
                                                            <div class="grid grid-cols-6 gap-6">
                                                                <div class="col-span-6 sm:col-span-3">
                                                                    <label for="name"
                                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                                    <input type="text" wire:model="name"
                                                                        autocomplete="given-name"
                                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                                    @error('name')
                                                                        <small
                                                                            class="text-xs text-red-700">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-span-6 sm:col-span-3">
                                                                    <label for="last_name"
                                                                        class="block text-sm font-medium text-gray-700">Apellidos</label>
                                                                    <input type="text" wire:model="last_name"
                                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                                    @error('last_name')
                                                                        <small
                                                                            class="text-xs text-red-700">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-span-6 sm:col-span-3">
                                                                    <label for="email"
                                                                        class="block text-sm font-medium text-gray-700">Email
                                                                    </label>
                                                                    <input type="text" wire:model="email"
                                                                        autocomplete="email"
                                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                                    @error('email')
                                                                        <small
                                                                            class="text-xs text-red-700">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-span-6 sm:col-span-3">
                                                                    <label for="phone"
                                                                        class="block text-sm font-medium text-gray-700">Telefono
                                                                    </label>
                                                                    <input type="text" wire:model="phone"
                                                                        autocomplete="phone"
                                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                                    @error('phone')
                                                                        <small
                                                                            class="text-xs text-red-700">{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-span-6 sm:col-span-3">
                                                                    <label for="status_id"
                                                                        class="block text-sm font-medium text-gray-700">Estado
                                                                        de lead</label>
                                                                    <select wire:model="status_id"
                                                                        autocomplete="status_id"
                                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                        @foreach ($statuses as $status)
                                                                            <option value="{{ $status->id }}">
                                                                                {{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-span-6 sm:col-span-3">
                                                                    @role('SuperUser')
                                                                    <label for="user_id"
                                                                        class="block text-sm font-medium text-gray-700">Asignado
                                                                        a</label>
                                                                    <select wire:model="user_id" autocomplete="user_id"
                                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                        @foreach ($users as $user)
                                                                            <option value="{{ $user->id }}">
                                                                                {{ $user->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                @endcan
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-4">
                                                                <label for="development_id"
                                                                    class="block text-sm font-medium text-gray-700">Desarrollo</label>
                                                                <select wire:model="development_id"
                                                                    autocomplete="development_id"
                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                    @foreach ($developments as $development)
                                                                        <option value="{{ $development->id }}">
                                                                            {{ $development->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                                <label for="city"
                                                                    class="block text-sm font-medium text-gray-700">Ciudad</label>
                                                                <input type="text" wire:model="city"
                                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                                                <label for="state"
                                                                    class="block text-sm font-medium text-gray-700">Estado
                                                                    / Provincia</label>
                                                                <input type="text" wire:model="state"
                                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-3 lg:col-span-6">
                                                                <label for="observations"
                                                                    class="block text-sm font-medium text-gray-700">Observaciones</label>
                                                                <textarea type="text" wire:model="observations"
                                                                    rows="2"
                                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                        <button
                                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                            Guardar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

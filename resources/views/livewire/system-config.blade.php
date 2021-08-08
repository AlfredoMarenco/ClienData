<div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex pb-4">
        <x-jet-nav-link :active="$nav_dev" wire:click="activeDev" class="cursor-pointer">
            {{ __('Developments') }}
        </x-jet-nav-link>
        <x-jet-nav-link :active="$nav_status" wire:click="activeStatus" class="cursor-pointer">
            {{ __('Leads status') }}
        </x-jet-nav-link>
    </div>



    <div class="p-10">
        @if ($nav_dev)
            <div>
                <div class="flex justify-end" x-data="{open:false}">
                    <button x-on:click="open=!open" wire:click="$set('development_name','')" class="bg-gray-800 py-2 px-3 rounded-md text-white">Agregar
                        desarrollo</button>

                    <div x-show="open">
                        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                            aria-modal="true">
                            <div
                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                    aria-hidden="true">
                                </div>
                                <!-- This element is to trick the browser into centering the modal contents. -->
                                <span class="hidden sm:inline-block sm:align-top sm:h-screen"
                                    aria-hidden="true">&#8203;</span>
                                <div
                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                                    <div class="w-full bg-gray-800 text-white px-4 py-4">
                                        <h2 class="text-xl">Crear nuevo desarrollo
                                        </h2>
                                    </div>
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-xl leading-6 font-medium text-gray-900"
                                                    id="modal-title">
                                                    Desarrollo inmobiliario
                                                </h3>
                                            </div>
                                        </div>
                                        @if ($success)
                                            <div class="text-center">
                                                <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                                <p class="text-2xl font-bold py-4">
                                                    Registro actualizado con
                                                    éxito...
                                                </p>
                                                <div class="mx-auto mt-6">
                                                    <a x-on:click="open=!open" wire:click="resetSuccess"
                                                        class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-center">
                                                <div wire:loading wire:target="storeDevelopment">
                                                    <i
                                                        class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                                    <p class="text-2xl font-bold py-4">
                                                        Actualizando estado...</p>
                                                    <div class="mx-auto mt-6">
                                                        <a x-on:click="open=!open" wire:click="resetSuccess"
                                                            class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <form wire:submit.prevent="storeDevelopment" wire:loading.remove>
                                                <div class="grid grid-cols-1">
                                                    <div class="w-full mt-4 px-4">
                                                        <label for="" class="block mb-2 ml-1">Nombre</label>
                                                        <input type="text" wire:model="development_name" class="form-input"
                                                            placeholder="Nombre">
                                                    </div>
                                                </div>

                                                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                                    <button type="submit"
                                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Crear
                                                    </button>
                                                    <button x-on:click="open=!open" type="button"
                                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-gray-50 text-center">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nombre
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 text-center">
                                        @foreach ($developments as $development)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $development->name }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    {{-- Boton registrar llamadas --}}
                                                    <div class="mx-1" x-data="{open:false}">
                                                        <button x-on:click="open=!open"
                                                            wire:click="setDevelopment({{ $development }})"
                                                            class="text-blue-900 hover:text-blue-800">Editar</button>
                                                        <div x-show="open">
                                                            <div class="fixed z-10 inset-0 overflow-y-auto"
                                                                aria-labelledby="modal-title" role="dialog"
                                                                aria-modal="true">
                                                                <div
                                                                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                        aria-hidden="true">
                                                                    </div>
                                                                    <!-- This element is to trick the browser into centering the modal contents. -->
                                                                    <span
                                                                        class="hidden sm:inline-block sm:align-top sm:h-screen"
                                                                        aria-hidden="true">&#8203;</span>
                                                                    <div
                                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                                                                        <div
                                                                            class="w-full bg-gray-800 text-white px-4 py-4">
                                                                            <h2 class="text-xl">Editar desarrollo inmobiliario
                                                                            </h2>
                                                                        </div>
                                                                        <div
                                                                            class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                            <div class="sm:flex">
                                                                                <div
                                                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                    <h3 class="text-xl leading-6 font-medium text-gray-900"
                                                                                        id="modal-title">
                                                                                        Estado de lead
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                            @if ($success)
                                                                                <div class="text-center">
                                                                                    <i
                                                                                        class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                                                                    <p class="text-2xl font-bold py-4">
                                                                                        Registro actualizado con
                                                                                        éxito...
                                                                                    </p>
                                                                                    <div class="mx-auto mt-6">
                                                                                        <a x-on:click="open=!open"
                                                                                            wire:click="resetSuccess"
                                                                                            class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                                <div class="text-center">
                                                                                    <div wire:loading
                                                                                        wire:target="updateDevelopment">
                                                                                        <i
                                                                                            class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                                                                        <p
                                                                                            class="text-2xl font-bold py-4">
                                                                                            Actualizando estado...</p>
                                                                                        <div class="mx-auto mt-6">
                                                                                            <a x-on:click="open=!open"
                                                                                                wire:click="resetSuccess"
                                                                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <form
                                                                                    wire:submit.prevent="updateDevelopment({{ $development }})"
                                                                                    wire:loading.remove>
                                                                                    <div class="grid grid-cols-1">
                                                                                        <div class="w-full mt-4 px-4">
                                                                                            <label for=""
                                                                                                class="block mb-2 ml-1">Nombre</label>
                                                                                            <input type="text"
                                                                                                wire:model="development_name"
                                                                                                class="form-input"
                                                                                                placeholder="Nombre">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                                                                        <button type="submit"
                                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Actualizar
                                                                                        </button>
                                                                                        <button x-on:click="open=!open"
                                                                                            type="button"
                                                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Cancel
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif


        @if ($nav_status)
            <div>
                <div class="flex justify-end" x-data="{open:false}">
                    <button x-on:click="open=!open" class="bg-gray-800 py-2 px-3 rounded-md text-white">Agregar
                        estado</button>

                    <div x-show="open">
                        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                            aria-modal="true">
                            <div
                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                    aria-hidden="true">
                                </div>
                                <!-- This element is to trick the browser into centering the modal contents. -->
                                <span class="hidden sm:inline-block sm:align-top sm:h-screen"
                                    aria-hidden="true">&#8203;</span>
                                <div
                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                                    <div class="w-full bg-gray-800 text-white px-4 py-4">
                                        <h2 class="text-xl">Editar estado de lead
                                        </h2>
                                    </div>
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-xl leading-6 font-medium text-gray-900"
                                                    id="modal-title">
                                                    Estado de lead
                                                </h3>
                                            </div>
                                        </div>
                                        @if ($success)
                                            <div class="text-center">
                                                <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                                <p class="text-2xl font-bold py-4">
                                                    Registro actualizado con
                                                    éxito...
                                                </p>
                                                <div class="mx-auto mt-6">
                                                    <a x-on:click="open=!open" wire:click="resetSuccess"
                                                        class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-center">
                                                <div wire:loading wire:target="storeStatus">
                                                    <i
                                                        class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                                    <p class="text-2xl font-bold py-4">
                                                        Actualizando estado...</p>
                                                    <div class="mx-auto mt-6">
                                                        <a x-on:click="open=!open" wire:click="resetSuccess"
                                                            class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <form wire:submit.prevent="storeStatus" wire:loading.remove>
                                                <div class="grid grid-cols-3">
                                                    <div class="w-full mt-4 px-4">
                                                        <label for="" class="block mb-2 ml-1">Nombre</label>
                                                        <input type="text" wire:model="status_name" class="form-input"
                                                            placeholder="Nombre">
                                                    </div>
                                                    <div class="w-full mt-4 px-4">
                                                        <label for="" class="block mb-2 ml-1">Colo
                                                            de fondo:</label>
                                                        <input wire:model="status_colorbg" class="w-full rounded-md "
                                                            type="color">
                                                    </div>
                                                    <div class="w-full mt-4 px-4">
                                                        <label for="" class="block mb-2 ml-1">Colo
                                                            de texto:</label>
                                                        <input wire:model="status_colortext" class="w-full rounded-md "
                                                            type="color">
                                                    </div>

                                                    <div class="w-full text-left col-span-3 mt-10 px-2">
                                                        <label class="block">Vista
                                                            previa:</label>
                                                        <span
                                                            class="px-2 inline-flex text-sm font-bold leading-5 rounded-full"
                                                            style="background:{{ $status_colorbg }}; color:{{ $status_colortext }};">
                                                            {{ $status_name }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                                    <button type="submit"
                                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Crear
                                                    </button>
                                                    <button x-on:click="open=!open" type="button"
                                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-gray-50 text-center">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nombre
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Vista previa
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 text-center">
                                        @foreach ($statuses as $status)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $status->name }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-sm font-bold leading-5 rounded-full"
                                                        style="background:{{ $status->color_bg }}; color:{{ $status->color_text }};">
                                                        {{ $status->name }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    {{-- Boton registrar llamadas --}}
                                                    <div class="mx-1" x-data="{open:false}">
                                                        <button x-on:click="open=!open"
                                                            wire:click="setStatus({{ $status }})"
                                                            class="text-blue-900 hover:text-blue-800">Editar</button>
                                                        <div x-show="open">
                                                            <div class="fixed z-10 inset-0 overflow-y-auto"
                                                                aria-labelledby="modal-title" role="dialog"
                                                                aria-modal="true">
                                                                <div
                                                                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                        aria-hidden="true">
                                                                    </div>
                                                                    <!-- This element is to trick the browser into centering the modal contents. -->
                                                                    <span
                                                                        class="hidden sm:inline-block sm:align-top sm:h-screen"
                                                                        aria-hidden="true">&#8203;</span>
                                                                    <div
                                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                                                                        <div
                                                                            class="w-full bg-gray-800 text-white px-4 py-4">
                                                                            <h2 class="text-xl">Editar estado de lead
                                                                            </h2>
                                                                        </div>
                                                                        <div
                                                                            class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                            <div class="sm:flex">
                                                                                <div
                                                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                                    <h3 class="text-xl leading-6 font-medium text-gray-900"
                                                                                        id="modal-title">
                                                                                        Estado de lead
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                            @if ($success)
                                                                                <div class="text-center">
                                                                                    <i
                                                                                        class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                                                                    <p class="text-2xl font-bold py-4">
                                                                                        Registro actualizado con
                                                                                        éxito...
                                                                                    </p>
                                                                                    <div class="mx-auto mt-6">
                                                                                        <a x-on:click="open=!open"
                                                                                            wire:click="resetSuccess"
                                                                                            class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                                <div class="text-center">
                                                                                    <div wire:loading
                                                                                        wire:target="updateStatus">
                                                                                        <i
                                                                                            class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                                                                        <p
                                                                                            class="text-2xl font-bold py-4">
                                                                                            Actualizando estado...</p>
                                                                                        <div class="mx-auto mt-6">
                                                                                            <a x-on:click="open=!open"
                                                                                                wire:click="resetSuccess"
                                                                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <form
                                                                                    wire:submit.prevent="updateStatus({{ $status }})"
                                                                                    wire:loading.remove>
                                                                                    <div class="grid grid-cols-3">
                                                                                        <div class="w-full mt-4 px-4">
                                                                                            <label for=""
                                                                                                class="block mb-2 ml-1">Nombre</label>
                                                                                            <input type="text"
                                                                                                wire:model="status_name"
                                                                                                class="form-input"
                                                                                                placeholder="Nombre">
                                                                                        </div>
                                                                                        <div class="w-full mt-4 px-4">
                                                                                            <label for=""
                                                                                                class="block mb-2 ml-1">Colo
                                                                                                de fondo:</label>
                                                                                            <input
                                                                                                wire:model="status_colorbg"
                                                                                                class="w-full rounded-md "
                                                                                                type="color">
                                                                                        </div>
                                                                                        <div class="w-full mt-4 px-4">
                                                                                            <label for=""
                                                                                                class="block mb-2 ml-1">Colo
                                                                                                de texto:</label>
                                                                                            <input
                                                                                                wire:model="status_colortext"
                                                                                                class="w-full rounded-md "
                                                                                                type="color">
                                                                                        </div>

                                                                                        <div
                                                                                            class="w-full text-left col-span-3 mt-10 px-2">
                                                                                            <label class="block">Vista
                                                                                                previa:</label>
                                                                                            <span
                                                                                                class="px-2 inline-flex text-sm font-bold leading-5 rounded-full"
                                                                                                style="background:{{ $status_colorbg }}; color:{{ $status_colortext }};">
                                                                                                {{ $status_name }}
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                                                                        <button type="submit"
                                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Actualizar
                                                                                        </button>
                                                                                        <button x-on:click="open=!open"
                                                                                            type="button"
                                                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Cancel
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif
    </div>


</div>

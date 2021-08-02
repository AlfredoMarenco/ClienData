<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lead Information') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="w-full mx-auto sm:px-6 lg:px-3">
            <div class="bg-gray-100  shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-6">
                    <div class="bg-white rounded-md">
                        <div class="w-full mt-6 px-4">
                            <img class="h-20 w-20 mx-auto rounded-full object-cover"
                                src="https://ui-avatars.com/api/?name={{ $lead->name }}+{{ $lead->last_name }}&background=random" />
                            <p class="text-xl font-semibold text-gray-700 text-center my-2">
                                {{ $lead->fullName() }}
                            </p>
                            <p class="text-center mb-6">
                                <span class="bg-red-600 rounded-md px-1 text-white font-bold">{{ $lead->status }}</span>
                            </p>
                            <label class="text-gray-400">Asignado a:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->user->name }}</p>

                            <label class="text-gray-400">Nombre:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->name }}</p>

                            <label class="text-gray-400">Apellidos:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->last_name }}</p>

                            <label class="text-gray-400">Correo electrónico:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->email }}</p>

                            <label class="text-gray-400">Teléfonos:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->phone }}</p>

                            <label class="text-gray-400">Estatus:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->status }}</p>

                            <label class="text-gray-400">Último contacto:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->updated_at->diffForHumans() }}</p>

                            <label class="text-gray-400">Fecha de creación:</label>
                            <p class="text-gray-900 underline mb-2">{{ $lead->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl col-span-2">2</div>
                    <div class="bg-white rounded-2xl">3</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

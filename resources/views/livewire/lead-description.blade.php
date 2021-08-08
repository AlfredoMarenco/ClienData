<div class="w-full mt-6 mb-4 px-6">
    <img class="h-20 w-20 mx-auto rounded-full object-cover shadow-lg"
        src="https://ui-avatars.com/api/?name={{ $lead->name }}+{{ $lead->last_name }}&background=random" />
    <p class="text-xl font-semibold text-gray-700 text-center my-2">
        {{ $lead->fullName() }}
    </p>
    <p class="text-center mb-1">
        <span class="rounded-md px-1 text-white text-sm font-bold uppercase"
            style="background:{{ $lead->status->color_bg }}; color:{{ $lead->status->color_text }};">{{ $lead->status->name }}</span>
    </p>
    <p class="text-center mb-6 text-gray-600 text-lg">
        {{ $lead->development->name }}
    </p>
    <label class="text-gray-400">Asignado a:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->user->name }}</p>

    <label class="text-gray-400">Nombre:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->name }}</p>

    <label class="text-gray-400">Apellidos:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->last_name }}</p>

    <label class="text-gray-400">Correo electrónico:</label>
    <div class="flex mb-2" x-data="{open:false}">
        <div wire:loading.remove wire:target="updateEmail">
            <p class="text-gray-900 underline" x-show="!open">{{ $lead->email }}</p>
        </div>
        <div wire:loading='updateEmail' wire:target='updateEmail'>
            <i class="animate-spin fas fa-spinner"></i>
        </div>
        <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
                class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
        <div x-show="open" class="flex items-center justify-between">
            <div>
                <input type="text" class="py-1 w-full rounded-lg" placeholder="Email" wire:model="email"
                    wire:keydown.enter="updateEmail" @keyup.enter="open=!open">
            </div>
            <div>
                <button wire:click="updateEmail" x-on:click="open=!open"><i
                        class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
                <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
            </div>
        </div>
    </div>

    <label class="text-gray-400">Teléfonos:</label>
    <div class="flex mb-2" x-data="{open:false}">
        <div wire:loading.remove wire:target="updatePhone">
            <p class="text-gray-900 underline" x-show="!open">{{ $lead->phone }}</p>
        </div>
        <div wire:loading='updatePhone' wire:target='updatePhone'>
            <i class="animate-spin fas fa-spinner"></i>
        </div>
        <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
                class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
        <div x-show="open" class="flex items-center justify-between">
            <div>
                <input type="text" class="py-1 w-full rounded-lg" placeholder="Telefono de celular" wire:model="phone"
                    wire:keydown.enter="updatePhone" @keyup.enter="open=!open">
            </div>
            <div>
                <button wire:click="updatePhone" x-on:click="open=!open"><i
                        class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
                <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
            </div>
        </div>
    </div>

    <label class="text-gray-400">Estatus del Lead:</label>
    <div class="flex mb-2" x-data="{open:false}">
        <div wire:loading.remove wire:target="updateStatus">
            <p class="text-gray-900 underline" x-show="!open">{{ $lead->status->name }}</p>
        </div>
        <div wire:loading='updateStatus' wire:target='updateStatus'>
            <i class="animate-spin fas fa-spinner"></i>
        </div>
        <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
                class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
        <div x-show="open" class="flex items-center justify-between">
            <div class="w-full">
                <select class="rounded-lg py-1" wire:model="status">
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex">
                <button wire:click="updateStatus" x-on:click="open=!open"><i
                        class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
                <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
            </div>
        </div>
    </div>

    <label class="text-gray-400">Estado:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->state }}</p>

    <label class="text-gray-400">Ciudad:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->city }}</p>

    <label class="text-gray-400">Último contacto:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->updated_at->diffForHumans() }}</p>

    <label class="text-gray-400">Fecha de creación:</label>
    <p class="text-gray-900 underline mb-2">{{ $lead->created_at->diffForHumans() }}</p>
</div>

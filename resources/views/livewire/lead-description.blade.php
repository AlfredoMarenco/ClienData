<div class="w-full mt-6 mb-4 px-6">
    <img class="h-20 w-20 mx-auto rounded-full object-cover shadow-lg"
        src="https://ui-avatars.com/api/?name={{ $lead->name }}+{{ $lead->last_name }}&background=random" />
    <div class="mb-2 flex justify-center">
        <p class="text-xl font-semibold text-gray-800 text-center my-2">
            {{ $lead->fullName() }}
        <div class="relative inline-block text-left ml-2" x-data="{open:false}">
            <div>
                <i class="fas fa-info-circle text-gray-600 hover:text-gray-700" x-on:click="open=!open"
                    @click.outside="open = false"></i>
            </div>
            <div class="origin-top-right absolute left-2 mt-2 w-64 rounded-md shadow-lg bg-gray-100 ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show="open">
                <div class="py-2" role="none">
                    @isset($lead->observations)
                        <div class="px-4 text-sm text-gray-800 text-justify">
                            {{ $lead->observations }}
                        </div>
                    @else
                        <div class="px-4 text-sm text-gray-800 text-justify">
                            Sin observaciones
                        </div>
                    @endisset
                </div>
            </div>
        </div>
        </p>
    </div>
    <p class="text-center mb-1">
        <span class="rounded-md px-1 text-white text-sm font-bold uppercase shadow-md"
            style="background:{{ $lead->status->color_bg }}; color:{{ $lead->status->color_text }};">{{ $lead->status->name }}</span>
    </p>
    <p class="text-center mb-6 text-gray-600 text-lg">
        {{ $lead->development->name }}
    </p>
    <label class="text-gray-400">Asignado a:</label>
    <p class="text-gray-800 underline mb-2">{{ $lead->user->name }}</p>

    <label class="text-gray-400">Nombre:</label>
    <div class="flex mb-2" x-data="{open:false}">
        <div wire:loading.remove wire:target="updateName">
            <p class="text-gray-800 underline" x-show="!open">{{ $lead->name }}</p>
        </div>
        <div wire:loading='updateName' wire:target='updateName'>
            <i class="animate-spin fas fa-spinner"></i>
        </div>
        <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
                class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
        <div x-show="open" class="flex items-center justify-between">
            <div>
                <input type="text" class="py-1 w-full rounded-lg" placeholder="Nombre" wire:model="name"
                    wire:keydown.enter="updateName" @keyup.enter="open=!open">
            </div>
            <div>
                <button wire:click="updateName" x-on:click="open=!open"><i
                        class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
                <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
            </div>
        </div>
    </div>

    <label class="text-gray-400">Apellidos:</label>
    <div class="flex mb-2" x-data="{open:false}">
        <div wire:loading.remove wire:target="updateLastName">
            <p class="text-gray-800 underline" x-show="!open">{{ $lead->last_name }}</p>
        </div>
        <div wire:loading='updateLastName' wire:target='updateLastName'>
            <i class="animate-spin fas fa-spinner"></i>
        </div>
        <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
                class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
        <div x-show="open" class="flex items-center justify-between">
            <div>
                <input type="text" class="py-1 w-full rounded-lg" placeholder="Nombre" wire:model="last_name"
                    wire:keydown.enter="updateLastName" @keyup.enter="open=!open">
            </div>
            <div>
                <button wire:click="updateLastName" x-on:click="open=!open"><i
                        class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
                <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
            </div>
        </div>
    </div>

    <label class="text-gray-400">Correo electrónico:</label>
    @role('Administrador')
    <div class="flex mb-2" x-data="{open:false}">
        <div wire:loading.remove wire:target="updateEmail">
            <p class="text-gray-800 underline" x-show="!open">{{ $lead->email }}</p>
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
@else
    <div>
        <p class="text-gray-800 underline" x-show="!open">{{ $lead->email }}</p>
    </div>
@endcan

<label class="text-gray-400">Teléfonos:</label>
<div class="flex mb-2" x-data="{open:false}">
    <div wire:loading.remove wire:target="updatePhone">
        <p class="text-gray-800 underline" x-show="!open">{{ $lead->phone }}</p>
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
        <p class="text-gray-800 underline" x-show="!open">{{ $lead->status->name }}</p>
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

<label class="text-gray-400">Desarrollo:</label>
<div class="flex mb-2" x-data="{open:false}">
    <div wire:loading.remove wire:target="updateDevelopment">
        <p class="text-gray-800 underline" x-show="!open">{{ $lead->development->name }}</p>
    </div>
    <div wire:loading='updateDevelopment' wire:target='updateDevelopment'>
        <i class="animate-spin fas fa-spinner"></i>
    </div>
    <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
            class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
    <div x-show="open" class="flex items-center justify-between">
        <div class="w-full">
            <select class="rounded-lg py-1" wire:model="development">
                @foreach ($developments as $development)
                    <option value="{{ $development->id }}">{{ $development->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex">
            <button wire:click="updateDevelopment" x-on:click="open=!open"><i
                    class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
            <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
        </div>
    </div>
</div>

<label class="text-gray-400">Estado:</label>
<div class="flex mb-2" x-data="{open:false}">
    <div wire:loading.remove wire:target="updateState">
        <p class="text-gray-800 underline" x-show="!open">{{ $lead->state }}</p>
    </div>
    <div wire:loading='updateState' wire:target='updateState'>
        <i class="animate-spin fas fa-spinner"></i>
    </div>
    <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
            class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
    <div x-show="open" class="flex items-center justify-between">
        <div>
            <input type="text" class="py-1 w-full rounded-lg" placeholder="Estado, Ciudad" wire:model="state"
                wire:keydown.enter="updateState" @keyup.enter="open=!open">
        </div>
        <div>
            <button wire:click="updateState" x-on:click="open=!open"><i
                    class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
            <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
        </div>
    </div>
</div>

<label class="text-gray-400">Ciudad:</label>
<div class="flex mb-2" x-data="{open:false}">
    <div wire:loading.remove wire:target="updateCity">
        <p class="text-gray-800 underline" x-show="!open">{{ $lead->city }}</p>
    </div>
    <div wire:loading='updateCity' wire:target='updateCity'>
        <i class="animate-spin fas fa-spinner"></i>
    </div>
    <span x-on:click="open=!open" x-show="!open"><i x-show="!open"
            class="fas fa-pen ml-2 cursor-pointer hover:text-gray-500"></i></span>
    <div x-show="open" class="flex items-center justify-between">
        <div>
            <input type="text" class="py-1 w-full rounded-lg" placeholder="Nombre" wire:model="city"
                wire:keydown.enter="updateCity" @keyup.enter="open=!open">
        </div>
        <div>
            <button wire:click="updateCity" x-on:click="open=!open"><i
                    class="fas fa-check-circle text-green-600 ml-2 text-2xl"></i></button>
            <button x-on:click="open=!open"><i class="fas fa-times-circle text-red-600 ml-2 text-2xl"></i></button>
        </div>
    </div>
</div>

<label class="text-gray-400">Último contacto:</label>
<p class="text-gray-800 underline mb-2">{{ $lead->updated_at->diffForHumans() }}</p>

<label class="text-gray-400">Fecha de creación:</label>
<p class="text-gray-800 underline mb-2">{{ $lead->created_at->diffForHumans() }}</p>
</div>

<div>
    {{-- Filtros --}}
    <div class="flex justify-between mb-3 px-4 items-center text-xs">
        <div class="flex justify-between items-center">
            @role('Administrador')
            <div class="mx-1">
                <label>Mostrar todos:</label>
                <input wire:model="all" type="checkbox"
                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
            </div>
            <div class="mx-1">
                <label
                    class="">Mostrar solo de:</label>
                <select wire:model='user'
                    class="
                    py-0.5 rounded-md text-xs">
                    <option value="" selected>Seleccione una opcion</option>
                    @foreach ($users->except(3) as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
            </div>
        @endcan
        @role('SuperUser')
        <div class="mx-1">
            <label>Mostrar todos:</label>
            <input wire:model="all" type="checkbox" wire:click="filter('all')"
                class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
        </div>
        <div class="mx-1">
            <label class="">Mostrar solo de:</label>
                <select wire:model='user' wire:click="
                filter('user')" class="py-0.5 rounded-md text-xs">
                <option value="" selected>Seleccione una opcion</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
                </select>
        </div>
    @endcan
</div>
</div>

{{-- Actividades del dia --}}
<div class="px-1 shadow-lg rounded-md bg-gray-200 mb-3" x-data="{open:true}">
<div class="bg-gray-800 px-4 py-2 rounded-t-lg" x-on:click="open=!open">
    <h1 class="text-white text-lg font-semibold">Actividades para hoy</h1>
</div>
<div class="bg-white px-2 rounded-b-lg py-8" x-show="open">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden pb-8 sm:rounded-lg">
                    @if ($tasks_today->count() > 0)
                        <div
                            class="grid grid-cols-6 justify-items-center items-start mx-2 mt-2 bg-gray-500 text-white font-bold rounded-t-lg mb-4">
                            <div>Actividad</div>
                            <div>Prioridad</div>
                            <div>Cliente</div>
                            <div>User</div>

                            <div>Detalles</div>
                            <div>Acciones</div>
                        </div>
                        @foreach ($tasks_today as $task)
                            <div
                                class="grid grid-cols-6 justify-items-center items-center mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
                                <div class="px-1">
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fab fa-whatsapp-square text-4xl text-green-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-5">
                                                    <i class="fas fa-phone-alt text-4xl text-blue-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                    <i class="fas fa-handshake text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-headset text-4xl text-red-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-mobile-alt text-4xl text-indigo-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-envelope text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch
                                </div>
                                <div class="text-gray-700">
                                    @switch($task->priority)
                                        @case('alta')
                                            <span class="text-red-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @case('normal')
                                            <span class="text-blue-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @default

                                    @endswitch
                                </div>
                                <div>
                                    <a class="text-gray-700"
                                        href="{{ route('leads.show', $task->lead) }}">{{ $task->lead->name }}
                                        {{ $task->lead->last_name }}</a>
                                </div>
                                <div class="overflow-ellipsis overflow-hidden">
                                    {{ $task->user->name }}
                                </div>
                                <div>
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-600 font-bold">Lugar:</span>
                                                        {{ $task->place }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Plataforma:</span>
                                                        {{ $task->platform }}
                                                    </p>
                                                    <p class="text-gray-700 overflow-ellipsis overflow-hidden"><span
                                                            class="text-gray-700 font-bold">Enlace:</span>
                                                        {{ $task->link }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Email:</span>
                                                        {{ $task->lead->email }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch

                                </div>
                                <div class="grid grid-row-2">
                                    <div class="relative inline-block text-left ml-auto" x-data="{open:false}">
                                        <div>
                                            <i x-on:click="open=!open" class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div x-show="open" @click.outside="open = false"
                                            class="origin-top-right absolute right-10 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="menu-button" tabindex="-1">
                                            <div class="" role=" none">
                                                <a x-on:click="open=!open"
                                                    class="text-gray-700 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100"
                                                    wire:click="setCompleteTask({{ $task }})">Marcar
                                                    como completada</a>
                                                @livewire('tasks.task-edit', ['task' => $task],
                                                key('task-edit'.$task->id))
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-xs">
                                        {{ $task->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-8">
                            <h3>No hay tareas para hoy</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- Actividades para mañana --}}
<div class="px-1 shadow-lg rounded-md bg-gray-200 mb-3" x-data="{open:false}">
<div class="bg-gray-800 px-4 py-2 rounded-t-lg" x-on:click="open=!open">
    <h1 class="text-white text-lg font-semibold">Actividades para mañana</h1>
</div>
<div class="bg-white px-2 rounded-b-lg py-8" x-show="open" @click.outside="open = false">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden pb-8 sm:rounded-lg">
                    @if ($tasks_tomorrow->count() > 0)
                        <div
                            class="grid grid-cols-6 justify-items-center items-start mx-2 mt-2 bg-gray-500 text-white font-bold rounded-t-lg mb-4">
                            <div>Actividad</div>
                            <div>Prioridad</div>
                            <div>Cliente</div>
                            <div>User</div>
                            <div>Detalles</div>
                            <div>Acciones</div>
                        </div>
                        @foreach ($tasks_tomorrow as $task)
                            <div
                                class="grid grid-cols-6 justify-items-center items-center mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
                                <div class="px-1">
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fab fa-whatsapp-square text-4xl text-green-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-5">
                                                    <i class="fas fa-phone-alt text-4xl text-blue-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                    <i class="fas fa-handshake text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-headset text-4xl text-red-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-mobile-alt text-4xl text-indigo-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-envelope text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch
                                </div>
                                <div class="text-gray-700">
                                    @switch($task->priority)
                                        @case('alta')
                                            <span class="text-red-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @case('normal')
                                            <span class="text-blue-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @default

                                    @endswitch
                                </div>
                                <div>
                                    <a class="text-gray-700"
                                        href="{{ route('leads.show', $task->lead) }}">{{ $task->lead->name }}
                                        {{ $task->lead->last_name }}</a>
                                </div>
                                <div class="overflow-ellipsis overflow-hidden">
                                    {{ $task->user->name }}
                                </div>
                                <div>
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-600 font-bold">Lugar:</span>
                                                        {{ $task->place }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Plataforma:</span>
                                                        {{ $task->platform }}
                                                    </p>
                                                    <p class="text-gray-700 overflow-ellipsis overflow-hidden"><span
                                                            class="text-gray-700 font-bold">Enlace:</span>
                                                        {{ $task->link }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Email:</span>
                                                        {{ $task->lead->email }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch

                                </div>
                                <div class="grid grid-row-2">
                                    <div class="relative inline-block text-left ml-auto" x-data="{open:false}">
                                        <div>
                                            <i x-on:click="open=!open" class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div x-show="open" @click.outside="open = false"
                                            class="origin-top-right absolute right-10 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="menu-button" tabindex="-1">
                                            <div class="" role=" none">
                                                <a x-on:click="open=!open"
                                                    class="text-gray-700 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100"
                                                    wire:click="setCompleteTask({{ $task }})">Marcar
                                                    como completada</a>
                                                @livewire('tasks.task-edit', ['task' => $task],
                                                key('task-edit'.$task->id))
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-xs">
                                        {{ $task->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-8">
                            <h3>No hay tareas para mañana</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- Actividades esta semana --}}
<div class="px-1 shadow-lg rounded-md bg-gray-200 mb-3" x-data="{open:false}">
<div class="bg-gray-800 px-4 py-2 rounded-t-lg" x-on:click="open=!open">
    <h1 class="text-white text-lg font-semibold">Actividades esta semana</h1>
</div>
<div class="bg-white px-2 rounded-b-lg py-8" x-show="open" @click.outside="open = false">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden pb-8 sm:rounded-lg">
                    @if ($tasks_thisweek->count() > 0)
                        <div
                            class="grid grid-cols-6 justify-items-center items-start mx-2 mt-2 bg-gray-500 text-white font-bold rounded-t-lg mb-4">
                            <div>Actividad</div>
                            <div>Prioridad</div>
                            <div>Cliente</div>
                            <div>User</div>
                            <div>Detalles</div>
                            <div>Acciones</div>
                        </div>
                        @foreach ($tasks_thisweek as $task)
                            <div
                                class="grid grid-cols-6 justify-items-center items-center mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
                                <div class="px-1">
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fab fa-whatsapp-square text-4xl text-green-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-5">
                                                    <i class="fas fa-phone-alt text-4xl text-blue-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                    <i class="fas fa-handshake text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-headset text-4xl text-red-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-mobile-alt text-4xl text-indigo-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-envelope text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch
                                </div>
                                <div class="text-gray-700">
                                    @switch($task->priority)
                                        @case('alta')
                                            <span class="text-red-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @case('normal')
                                            <span class="text-blue-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @default

                                    @endswitch
                                </div>
                                <div>
                                    <a class="text-gray-700"
                                        href="{{ route('leads.show', $task->lead) }}">{{ $task->lead->name }}
                                        {{ $task->lead->last_name }}</a>
                                </div>
                                <div class="overflow-ellipsis overflow-hidden">
                                    {{ $task->user->name }}
                                </div>
                                <div>
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-600 font-bold">Lugar:</span>
                                                        {{ $task->place }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Plataforma:</span>
                                                        {{ $task->platform }}
                                                    </p>
                                                    <p class="text-gray-700 overflow-ellipsis overflow-hidden"><span
                                                            class="text-gray-700 font-bold">Enlace:</span>
                                                        {{ $task->link }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->email }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch

                                </div>
                                <div class="grid grid-row-2">
                                    <div class="relative inline-block text-left ml-auto" x-data="{open:false}">
                                        <div>
                                            <i x-on:click="open=!open" class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div x-show="open" @click.outside="open = false"
                                            class="origin-top-right absolute right-10 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="menu-button" tabindex="-1">
                                            <div class="" role=" none">
                                                <a x-on:click="open=!open"
                                                    class="text-gray-700 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100"
                                                    wire:click="setCompleteTask({{ $task }})">Marcar
                                                    como completada</a>
                                                @livewire('tasks.task-edit', ['task' => $task],
                                                key('task-edit'.$task->id))
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-xs">
                                        {{ $task->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-8">
                            <h3>No hay tareas para esta semana</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- Actividades vencidas --}}
<div class="px-1 shadow-lg rounded-md bg-gray-200 mb-3" x-data="{open:false}">
<div class="bg-gray-800 px-4 py-2 rounded-t-lg" x-on:click="open=!open">
    <h1 class="text-white text-lg font-semibold">Actividades vencidas</h1>
</div>
<div class="bg-white px-2 rounded-b-lg py-8" x-show="open" @click.outside="open = false">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden pb-8 sm:rounded-lg">
                    @if ($tasks_expired->count() > 0)
                        <div
                            class="grid grid-cols-6 justify-items-center items-start mx-2 mt-2 bg-gray-500 text-white font-bold rounded-t-lg mb-4">
                            <div>Actividad</div>
                            <div>Prioridad</div>
                            <div>Cliente</div>
                            <div>User</div>
                            <div>Detalles</div>
                            <div>Acciones</div>
                        </div>
                        @foreach ($tasks_expired as $task)
                            <div
                                class="grid grid-cols-6 justify-items-center items-center mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
                                <div class="px-1">
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fab fa-whatsapp-square text-4xl text-green-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-5">
                                                    <i class="fas fa-phone-alt text-4xl text-blue-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10 mr-4">
                                                    <i class="fas fa-handshake text-4xl text-yellow-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-headset text-4xl text-red-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-mobile-alt text-4xl text-indigo-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-center items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <i class="fas fa-envelope text-4xl text-pink-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $task->type }}
                                                    </div>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch
                                </div>
                                <div class="text-gray-700">
                                    @switch($task->priority)
                                        @case('alta')
                                            <span class="text-red-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @case('normal')
                                            <span class="text-blue-600 font-bold">{{ $task->priority }}</span>
                                        @break
                                        @default

                                    @endswitch
                                </div>
                                <div>
                                    <a class="text-gray-700"
                                        href="{{ route('leads.show', $task->lead) }}">{{ $task->lead->name }}
                                        {{ $task->lead->last_name }}</a>
                                </div>
                                <div>
                                    {{ $task->user->name }}
                                </div>
                                <div>
                                    @switch($task->type)
                                        @case('whatsapp')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('llamar')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-600 font-bold">Lugar:</span>
                                                        {{ $task->place }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('video_conferencia')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Plataforma:</span>
                                                        {{ $task->platform }}
                                                    </p>
                                                    <p class="text-gray-700 overflow-ellipsis overflow-hidden"><span
                                                            class="text-gray-700 font-bold">Enlace:</span>
                                                        {{ $task->link }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('contacto')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Telefono:</span>
                                                        {{ $task->lead->phone }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @case('enviar_email')
                                            <div class="flex justify-start items-center">
                                                <div class="ml-4">
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">{{ $task->name }}</span>
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 font-bold">Email:</span>
                                                        {{ $task->lead->email }}
                                                    </p>
                                                    <p class="text-gray-700"><span
                                                            class="text-gray-700 text-sm">{{ $carbon->parse($task->date_start . ' ' . $task->time_end)->locale('es_Mx')->isoFormat('ddd D \d\e MMMM Y -\ hh:mm:ss A') }}</span>
                                                    </p>
                                                    <p class="text-gray-700 text-xs">Vence:
                                                        {{ $carbon->parse($task->expiration)->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @break
                                        @default
                                    @endswitch

                                </div>
                                <div class="grid grid-row-2">
                                    <div class="relative inline-block text-left ml-auto" x-data="{open:false}">
                                        <div>
                                            <i x-on:click="open=!open" class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <div x-show="open" @click.outside="open = false"
                                            class="origin-top-right absolute right-10 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="menu-button" tabindex="-1">
                                            <div class="" role=" none">
                                                <a x-on:click="open=!open"
                                                    class="text-gray-700 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100"
                                                    wire:click="setCompleteTask({{ $task }})">Marcar
                                                    como completada</a>
                                                @livewire('tasks.task-edit', ['task' => $task],
                                                key('task-edit'.$task->id))
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-xs">
                                        {{ $task->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-8">
                            <h3>No hay tareas vencidas</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

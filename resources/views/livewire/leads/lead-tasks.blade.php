<div class="rounded-md pb-1">
    <div class="bg-gray-800 rounded-t-lg mb-2">
        <h2 class="text-gray-100 font-bold text-2xl text-center">Lista de tareas</h2>
    </div>

    @foreach ($tasks as $task)
        <div class="grid grid-cols-3 justify-items-start p-2 mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
            <div class="col-span-2 px-1">
                <p class="text-gray-700"><span class="text-gray-700 font-bold">{{ $task->name }}</span></p>
                @switch($task->type)
                    @case('video_conferencia')
                        <p class="text-gray-700">{{ $task->type }}</p>
                    @break
                    @case('reunion')
                        <p class="text-gray-700">{{ $task->type }}</p>
                    @break
                    @default
                        <p class="text-gray-700">{{ $task->type }}</p>
                @endswitch
                <p class="text-gray-700 text-xs">Fecha de vencimiento:
                    {{ $carbon->parse($task->expiration)->diffForHumans() }}</p>
            </div>
            <div class="grid grid-row-2">
                <div class="relative inline-block text-left ml-auto" x-data="{open:false}">
                    <div>
                        <i x-on:click="open=!open" class="fas fa-ellipsis-h"></i>
                    </div>
                    <div x-show="open" @click.outside="open = false"
                        class="origin-top-right absolute right-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a x-on:click="open=!open" class="text-gray-700 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100"
                                wire:click="setCompleteTask({{ $task }})">Marcar como completada</a>
                            @livewire('tasks.task-edit', ['task' => $task], key('task-edit'.$task->id))
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 text-xs place-self-end">{{ $task->created_at->diffForHumans() }}</p>
            </div>
        </div>
    @endforeach
</div>

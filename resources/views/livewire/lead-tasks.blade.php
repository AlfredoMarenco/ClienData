<div class="rounded-md pb-1">
    <div class="bg-gray-800 rounded-t-lg mb-2">
        <h2 class="text-gray-100 font-bold text-2xl text-center">Lista de tareas</h2>
    </div>

    @foreach ($tasks as $task)
        <div class="grid grid-cols-3 justify-items-start p-2 mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
            <div class="col-span-2 px-1">
                <p class="text-gray-700"><span class="text-gray-700 font-bold">{{ $task->name }}</span></p>
                <p class="text-gray-700">{{ $task->type }}</p>
                <p class="text-gray-700 text-xs">Fecha de vencimiento:
                    {{ $carbon->parse($task->expiration)->diffForHumans() }}</p>
            </div>
            <p class="text-gray-700 text-xs place-self-end">{{ $task->created_at->diffForHumans() }}</p>

        </div>
    @endforeach
</div>

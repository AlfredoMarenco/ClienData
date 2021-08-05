<div class="bg-gray-100 rounded-md pb-1">
    <div class="bg-gray-800 rounded-t-lg mb-2">
        <h2 class="text-gray-100 font-bold text-2xl text-center">Lista de tareas</h2>
    </div>
    <div class="flex justify-end mx-2 mb-2">
        <button class="bg-transparent border-gray-700 text-sm border-2 px-2 py-1 rounded-lg hover:text-gray-500 hover:border-gray-500">Crear tarea</button>
    </div>
    @foreach ($tasks as $task)
        <div class="flex justify-between p-2 mx-2 mt-2 bg-white shadow-lg rounded-lg mb-4">
            <p class="text-gray-700"><span class="text-blue-400 font-bold">{{ $task->type }}</span> {{ $task->body }}</p>
            <p class="text-gray-700">{{ $task->created_at->diffForHumans() }}</p>
        </div>
    @endforeach
</div>

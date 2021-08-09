<div>
    <div class="flex justify-between mb-3">
        <div>
            <label>Mostrar:</label>
            <select class="py-0.5 rounded-md" wire:model="paginate">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            registros.
        </div>
        <div>
            <label>Buscar:</label>
            <input wire:model="search" type="text" class="w-96 py-0.5 rounded-md" placeholder="Busqueda por nombre">
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Propietario
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Estado
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Fecha de creacion
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Ultimo contacto
                                </th>
                                {{-- <th scope="col" class="relative px-6 py-3">
            <span class="sr-only">Edit</span>
        </th> --}}
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($leads as $lead)
                                <tr class="cursor-pointer hover:bg-blue-100"
                                    onclick="window.location='{{ route('leads.show', $lead) }}';">
                                    <td class="px-6 py-4 whitespace-nowrap cursor-pointer">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <a href="{{ route('leads.show', $lead) }}">
                                                    <img class="h-12 w-12 rounded-full object-cover shadow-2xl"
                                                        src="https://ui-avatars.com/api/?name={{ $lead->name }}+{{ $lead->last_name }}&color=7F9CF5&background=random" />
                                                </a>
                                            </div>
                                            <div class="ml-12">
                                                <div class="text-sm font-medium text-gray-900 hover:text-gray-700">
                                                    {{ $lead->fullName() }}
                                                </div>
                                                <div class="text-sm text-gray-500 hover:text-gray-900">
                                                    {{ $lead->email }}
                                                </div>
                                                <div class="text-sm text-gray-500 hover:text-gray-900">
                                                    {{ $lead->phone }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-700">{{ $lead->user->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-sm font-bold leading-5 rounded-full"
                                            style="background:{{ $lead->status->color_bg }}; color:{{ $lead->status->color_text }};">
                                            {{ $lead->status->name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        {{ $lead->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        {{ $lead->updated_at->diffForHumans() }}
                                    </td>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="w-full px-4 py-2">
                        {{ $leads->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

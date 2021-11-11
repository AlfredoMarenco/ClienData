<div>
    <div class="flex justify-between mb-3 px-4 items-center text-xs">
        <div class="flex justify-between items-center">
            <div class="mx-1">
                <label>Mostrar:</label>
                <select class="py-0.5 rounded-md text-xs" wire:model="paginate">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
            @role('Administrador')
                <div class="mx-1">
                    <label>Mostrar todos:</label>
                    <input wire:model="all" type="checkbox"
                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                </div>
                <div class="mx-1">
                    <label class="">Mostrar solo de:</label>
                    <select wire:model='user' class="
                    py-0.5 rounded-md text-xs">
                        @foreach ($users->except(3) as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endcan
            @role('SuperUser')
                <div class="mx-1">
                    <label>Mostrar todos:</label>
                    <input wire:model="all" type="checkbox"
                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                </div>
                <div class="mx-1">
                    <label class="">Mostrar solo de:</label>
                    <select wire:model='user' class="
                py-0.5 rounded-md text-xs">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endcan
            <div class="mx-1">
                <label class="">Por estatus:</label>
                <select wire:model='status' class="
            py-0.5 rounded-md text-xs">
                    <option value="" selected>Seleccione una opcion</option>
                    @foreach ($statuses as $status)
                        <option class="hover:bg-transparent"
                            style="background:{{ $status->color_bg }}; color:{{ $status->color_text }};"
                            value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <label>Nombre:</label>
            <input wire:model="name" type="text" class="w-44 py-0.5 rounded-md text-sm"
                placeholder="Busqueda por nombre ">
        </div>
        <div>
            <label>Correo:</label>
            <input wire:model="email" type="text" class="w-44 py-0.5 rounded-md text-sm"
                placeholder="Busqueda por email">
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800">
                            <tr>
                                <th wire:click="sortBy('name')" scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                    Nombre
                                    @include('partials._sort-icon',['field' => 'name'])
                                </th>
                                <th wire:click="sortBy('user_id')" scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                    Propietario
                                    @include('partials._sort-icon',['field' => 'user_id'])
                                </th>
                                <th wire:click="sortBy('status_id')" scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                    Estado
                                    @include('partials._sort-icon',['field' => 'status_id'])
                                </th>
                                <th wire:click="sortBy('created_at')" scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                    Fecha de creacion
                                    @include('partials._sort-icon',['field' => 'created_at'])
                                </th>
                                <th wire:click="sortBy('updated_at')" scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                    Ultimo contacto
                                    @include('partials._sort-icon',['field' => 'updated_at'])
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($leads as $lead)
                                <tr class="cursor-pointer hover:bg-blue-100">
                                    <td class="px-6 py-4 whitespace-nowrap cursor-pointer">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <a href="{{ route('leads.show', $lead) }}" target="_blank">
                                                    <img class="h-12 w-12 rounded-full object-cover shadow-2xl"
                                                        src="https://ui-avatars.com/api/?name={{ $lead->name }}+{{ $lead->last_name }}&color=7F9CF5&background=random" />
                                                </a>
                                            </div>
                                            <div class="ml-12">
                                                <div class="flex text-sm font-medium text-gray-900 hover:text-gray-700">
                                                    <div>
                                                        <a href="{{ route('leads.show', $lead) }}"
                                                            target="_blank">{{ $lead->fullName() }}</a>
                                                    </div>
                                                    <div class="relative inline-block text-left ml-2"
                                                        x-data="{open:false}">
                                                        <div>
                                                            <i class="fas fa-info-circle text-gray-600 hover:text-gray-700"
                                                                x-on:click="open=!open"
                                                                @click.outside="open = false"></i>
                                                        </div>
                                                        <div class="origin-top-right absolute left-2 mt-2 rounded-md shadow-lg bg-gray-200 ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="menu-button" tabindex="-1" x-show="open">
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
                                                </div>
                                                <div class="text-sm text-gray-500 hover:text-gray-900">
                                                    <a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>
                                                </div>
                                                <div class="text-sm text-gray-500 hover:text-gray-900">
                                                    <a href="tel:{{ $lead->phone }}">{{ $lead->phone }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img class="h-10 w-10 rounded-full object-cover ml-8"
                                            src="{{ $lead->user->profile_photo_url }}" alt="">
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
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a wire:click="delete({{ $lead }})" class="text-red-600 hover:text-red-900">Eliminar</a>
                                    </td>
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

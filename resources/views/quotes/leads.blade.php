<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer">
                                Nombre
                            </th>
                           {{--  <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Action</span>
                            </th> --}}
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
                                                    x-data="{ open: false }">
                                                    <div>
                                                        <i class="fas fa-info-circle text-gray-600 hover:text-gray-700"
                                                            x-on:click="open=!open" @click.outside="open = false"></i>
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
                                <td class="px-6 py-4 whitespace-nowrap cursor-pointer">
                                    <a href="{{ route('quote.master',[$development,$lead]) }}" class="text-gray-900 hover:text-green-500">Cotizar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

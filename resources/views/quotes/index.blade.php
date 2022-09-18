<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-6">
                    @foreach ($developments as $development)
                        @if ($development->id == 3)
                            <div class="p-10">
                                <a href="{{ route('quote.leads',$development) }}">
                                    <img class="w-full object-cover object-center hover:border-green-500 border-4 border-transparent cursor-pointer shadow-lg" src="{{ asset('img/domen/logo-imperio-maya.jpg') }}" alt="Logo imperio maya">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<div class="bg-gray-100 rounded-md pb-1">
    <div class="flex justify-left mx-2 bg-white py-4">
        {{-- Boton crear nota --}}
        <div class="mx-1" x-data="{open:false}">
            <button x-on:click="open=!open"
                class="bg-transparent text-blue-700 border-blue-700 text-sm border-2 px-2 py-1 rounded hover:text-blue-500 hover:border-blue-500 cursor-pointer">Crear
                nota</button>
            <div x-show="open">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                        </div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-top sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div
                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                            <div class="w-full bg-gray-800 text-white px-4 py-4">
                                <h2 class="text-xl">Agregar nota</h2>
                            </div>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-xl leading-6 font-medium text-gray-900" id="modal-title">
                                            Informacion de la nota
                                        </h3>
                                    </div>
                                </div>
                                @if ($success)
                                    <div class="text-center">
                                        <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                        <p class="text-2xl font-bold py-4">Nota creada con éxito...</p>
                                        <div class="mx-auto mt-6">
                                            <a x-on:click="open=!open" wire:click="resetSuccess"
                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <div wire:loading wire:target="storeNote">
                                            <i class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                            <p class="text-2xl font-bold py-4">Creando nota...</p>
                                            <div class="mx-auto mt-6">
                                                <a x-on:click="open=!open" wire:click="resetSuccess"
                                                    class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form wire:submit.prevent="storeNote" wire:loading.remove>
                                        <div class="w-full mt-6 px-4">
                                            <label for="" class="block mb-2 ml-1">Nombre de la nota:</label>
                                            <input wire:model="note_name" class="w-full rounded-md py-1" type="text"
                                                placeholder="Nombre">
                                        </div>
                                        <div class="w-full mt-4 px-4">
                                            <label for="" class="block mb-2 ml-1">Descripción:</label>
                                            <textarea wire:model="note_body" rows="7" class="w-full rounded-md"
                                                placeholder="Descripcion de la nota"></textarea>
                                        </div>

                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                            <button type="submit"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Guardad nota
                                            </button>
                                            <button x-on:click="open=!open" type="button"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Boton registrar llamadas --}}
        <div class="mx-1" x-data="{open:false}">
            <button x-on:click="open=!open"
                class="bg-transparent text-green-700 border-green-700 text-sm border-2 px-2 py-1 rounded hover:text-green-500 hover:border-green-500 cursor-pointer">Registrar
                llamada</button>
            <div x-show="open">
                <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                        </div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-top sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div
                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                            <div class="w-full bg-gray-800 text-white px-4 py-4">
                                <h2 class="text-xl">Agregar registro de llamada</h2>
                            </div>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-xl leading-6 font-medium text-gray-900" id="modal-title">
                                            Información de la llamada
                                        </h3>
                                    </div>
                                </div>
                                @if ($success)
                                    <div class="text-center">
                                        <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                        <p class="text-2xl font-bold py-4">LLamada registrada con éxito...</p>
                                        <div class="mx-auto mt-6">
                                            <a x-on:click="open=!open" wire:click="resetSuccess"
                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <div wire:loading wire:target="storeCall">
                                            <i class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                            <p class="text-2xl font-bold py-4">Registrando llamada...</p>
                                            <div class="mx-auto mt-6">
                                                <a x-on:click="open=!open" wire:click="resetSuccess"
                                                    class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form wire:submit.prevent="storeCall" wire:loading.remove>
                                        <div class="grid grid-cols-3">
                                            <div class="w-full mt-4 px-4">
                                                <label for="" class="block mb-2 ml-1">Tipo de llamada:</label>
                                                <select wire:model="call_type" class="w-full rounded-md py-1">
                                                    <option value="realizada" selected>Realizada</option>
                                                    <option value="recibida">Recibida</option>
                                                </select>
                                            </div>
                                            <div class="w-full mt-4 px-4">
                                                <label for="" class="block mb-2 ml-1">Fecha:</label>
                                                <input wire:model="call_date" class="w-full rounded-md py-1"
                                                    type="date">
                                            </div>
                                            <div class="w-full mt-4 px-4">
                                                <label for="" class="block mb-2 ml-1">Hora:</label>
                                                <input wire:model="call_time" class="w-full rounded-md py-1"
                                                    type="time">
                                            </div>
                                            <div class="w-full mt-4 px-4 col-span-2">
                                                <label for="" class="block mb-2 ml-1">Resultado:</label>
                                                <select wire:model="call_result" class="w-full rounded-md py-1">
                                                    <option value="conectado" selected>conectado</option>
                                                    <option value="sin respuesta">sin respuesta</option>
                                                    <option value="ocupado">ocupado</option>
                                                    <option value="buzón de voz">buzón de voz</option>
                                                    <option value="llamar más tarde">llamar más tarde</option>
                                                    <option value="número equivocado">número equivocado</option>
                                                    <option value="no interesado">no interesado</option>
                                                </select>
                                            </div>
                                            <div class="w-full mt-4 px-4 col-span-3">
                                                <label for="" class="block mb-2 ml-1">Descripción:</label>
                                                <textarea wire:model="call_comment" rows="5" class="w-full rounded-md"
                                                    placeholder="Commentario de la llamada"></textarea>
                                            </div>
                                        </div>

                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                            <button type="submit"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Guardad llamada
                                            </button>
                                            <button x-on:click="open=!open" type="button"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- Boton registrar tareas --}}
        <div class="mx-1" x-data="{open:false}">
            <button x-on:click="open=!open"
                class="bg-transparent text-pink-700 border-pink-700 text-sm border-2 px-2 py-1 rounded hover:text-pink-500 hover:border-pink-500 cursor-pointer">Crear tarea</button>
            <div x-show="open">
                <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                        </div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-top sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div
                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                            <div class="w-full bg-gray-800 text-white px-4 py-4">
                                <h2 class="text-xl">Agregar registro de llamada</h2>
                            </div>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-xl leading-6 font-medium text-gray-900" id="modal-title">
                                            Información de la llamada
                                        </h3>
                                    </div>
                                </div>
                                @if ($success)
                                    <div class="text-center">
                                        <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                        <p class="text-2xl font-bold py-4">LLamada registrada con éxito...</p>
                                        <div class="mx-auto mt-6">
                                            <a x-on:click="open=!open" wire:click="resetSuccess"
                                                class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <div wire:loading wire:target="storeCall">
                                            <i class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                            <p class="text-2xl font-bold py-4">Registrando llamada...</p>
                                            <div class="mx-auto mt-6">
                                                <a x-on:click="open=!open" wire:click="resetSuccess"
                                                    class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <form wire:submit.prevent="storeCall" wire:loading.remove>
                                        <div class="grid grid-cols-3">
                                            <div class="w-full mt-4 px-4">
                                                <label for="" class="block mb-2 ml-1">Tipo de llamada:</label>
                                                <select wire:model="call_type" class="w-full rounded-md py-1">
                                                    <option value="realizada" selected>Realizada</option>
                                                    <option value="recibida">Recibida</option>
                                                </select>
                                            </div>
                                            <div class="w-full mt-4 px-4">
                                                <label for="" class="block mb-2 ml-1">Fecha:</label>
                                                <input wire:model="call_date" class="w-full rounded-md py-1"
                                                    type="date">
                                            </div>
                                            <div class="w-full mt-4 px-4">
                                                <label for="" class="block mb-2 ml-1">Hora:</label>
                                                <input wire:model="call_time" class="w-full rounded-md py-1"
                                                    type="time">
                                            </div>
                                            <div class="w-full mt-4 px-4 col-span-2">
                                                <label for="" class="block mb-2 ml-1">Resultado:</label>
                                                <select wire:model="call_result" class="w-full rounded-md py-1">
                                                    <option value="conectado" selected>conectado</option>
                                                    <option value="sin respuesta">sin respuesta</option>
                                                    <option value="ocupado">ocupado</option>
                                                    <option value="buzón de voz">buzón de voz</option>
                                                    <option value="llamar más tarde">llamar más tarde</option>
                                                    <option value="número equivocado">número equivocado</option>
                                                    <option value="no interesado">no interesado</option>
                                                </select>
                                            </div>
                                            <div class="w-full mt-4 px-4 col-span-3">
                                                <label for="" class="block mb-2 ml-1">Descripción:</label>
                                                <textarea wire:model="call_comment" rows="5" class="w-full rounded-md"
                                                    placeholder="Commentario de la llamada"></textarea>
                                            </div>
                                        </div>

                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                            <button type="submit"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Guardad llamada
                                            </button>
                                            <button x-on:click="open=!open" type="button"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-gray-800 rounded-t-lg mb-2">
        <h2 class="text-gray-100 font-bold text-2xl text-center">Linea de tiempo</h2>
    </div>
    @foreach ($events as $event)
        <div class="p-2 mx-2 bg-white shadow-lg">
            @switch($event->eventable_type)
                @case('App\Models\Note')
                    <div class="grid grid-cols-6 items-center max-w-screen-md">
                        <div class="grid grid-cols-2">
                            <div>&nbsp;</div>
                            <div class="border-l-2 w-full"></div>
                        </div>
                        <div class="flex col-span-5 place-self-end">
                            <div>
                                <a class="cursor-pointer mr-2">
                                    <i class="fas fa-comment text-gray-300 hover:text-gray-600"></i>
                                </a>
                            </div>
                            <div>
                                <a class="cursor-pointer"
                                    wire:click="deleteNote({{ $notes->find($event->eventable_id) }})">
                                    <i class="fas fa-trash text-gray-300 hover:text-gray-600"></i>
                                </a>

                            </div>
                        </div>
                        <div class="grid grid-rows-2 justify-items-center items-center">
                            <div class="text-gray-800 font-semibold">
                                {{ $notes->find($event->eventable_id)->created_at->toFormattedDateString() }}
                            </div>
                            <div
                                class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 ">
                                <!-- Heroicon name: outline/exclamation -->
                                <i class="far fa-sticky-note text-blue-700 text-xl font-light"></i>
                            </div>
                        </div>
                        <div class="col-span-4 px-3 self-center py-2">
                            <p class="ml-2 font-bold text-lg text-gray-900">{{ $notes->find($event->eventable_id)->name }}
                            </p>
                            <p class="ml-2 text-sm text-gray-700 mt-">{!! $notes->find($event->eventable_id)->body !!}</p>
                        </div>

                        <div class="text-right text-xs px-1">
                            <p>{{ $notes->find($event->eventable_id)->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @break
                @case('App\Models\Task')
                    <div class="grid grid-cols-6 items-center max-w-screen-md">
                        <div class="grid grid-cols-2">
                            <div>&nbsp;</div>
                            <div class="border-l-2 w-full"></div>
                        </div>
                        <div class="flex col-span-5 place-self-end">
                            <div>
                                <a class="cursor-pointer mr-2">
                                    <i class="fas fa-comment text-gray-300 hover:text-gray-600"></i>
                                </a>
                            </div>
                            <div>
                                <a class="cursor-pointer"
                                    wire:click="deleteNote({{ $tasks->find($event->eventable_id) }})">
                                    <i class="fas fa-trash text-gray-300 hover:text-gray-600"></i>
                                </a>

                            </div>
                        </div>
                        <div class="grid grid-rows-2 justify-items-center items-center">
                            <div class="text-gray-800 font-semibold">
                                {{ $tasks->find($event->eventable_id)->created_at->toFormattedDateString() }}
                            </div>
                            <div
                                class="mx-auto flex-shrink-0 flex items-center justify-center h-14 w-14 rounded-full bg-blue-100 sm:mx-0 ">
                                <!-- Heroicon name: outline/exclamation -->
                                <i class="far fa-sticky-note text-blue-700 text-2xl font-light"></i>
                            </div>
                        </div>
                        <div class="col-span-4 px-3 self-center py-2">
                            <p class="ml-2 font-bold text-lg text-gray-900">{{ $tasks->find($event->eventable_id)->name }}
                            </p>
                            <p class="ml-2 text-sm text-gray-700 mt-">{!! $tasks->find($event->eventable_id)->body !!}</p>
                        </div>

                        <div class="text-right text-xs px-1">
                            <p>{{ $tasks->find($event->eventable_id)->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @break
                @case('App\Models\Call')
                    <div class="grid grid-cols-6 items-center max-w-screen-md">
                        <div class="grid grid-cols-2">
                            <div>&nbsp;</div>
                            <div class="border-l-2 w-full"></div>
                        </div>
                        <div class="flex col-span-5 place-self-end">
                            <div>
                                <a class="cursor-pointer mr-2">
                                    <i class="fas fa-comment text-gray-300 hover:text-gray-600"></i>
                                </a>
                            </div>
                            <div>
                                <a class="cursor-pointer"
                                    wire:click="deleteCall({{ $calls->find($event->eventable_id) }})">
                                    <i class="fas fa-trash text-gray-300 hover:text-gray-600"></i>
                                </a>

                            </div>
                        </div>
                        <div class="grid grid-rows-2 justify-items-center items-center">
                            <div class="text-gray-800 font-semibold">
                                {{ $calls->find($event->eventable_id)->created_at->toFormattedDateString() }}
                            </div>
                            <div
                                class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 ">
                                <!-- Heroicon name: outline/exclamation -->
                                <i class="fas fa-phone-alt text-green-700 text-xl font-light"></i>
                            </div>
                        </div>
                        <div class="col-span-4 px-3 self-center py-2">
                            <p class="ml-2 font-bold text-lg text-gray-900">
                                Llamada {{ $calls->find($event->eventable_id)->type }}
                            </p>
                            <p class="ml-2 text-sm text-gray-700">
                                <span class="font-semibold">Resultado:</span> {{  $calls->find($event->eventable_id)->result  }}
                            </p>
                            <p class="ml-2 text-sm text-gray-700">
                                <span class="font-semibold">Realizada:</span> {{ $carbon->parse($calls->find($event->eventable_id)->time)->format('g:i:s A') }}
                            </p>
                            <p class="ml-2 text-sm text-gray-700"><span class="font-semibold">Comentario:</span> {{  $calls->find($event->eventable_id)->comment  }}</p>
                        </div>

                        <div class="text-right text-xs px-1">
                            <p>{{ $calls->find($event->eventable_id)->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @break
            @endswitch
        </div>
    @endforeach

    <div class="px-4 text-center py-4">
        <a class="cursor-pointer hover:text-gray-700" wire:click="viewMore">Ver más</a>
    </div>
</div>

<div x-data="{open:false}">
    <a x-on:click="open=!open" class="text-gray-700 block px-4 py-2 text-sm cursor-pointer hover:bg-gray-100">Modificar
        tarea</a>

    <div x-show="open">
        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-top sm:h-screen" aria-hidden="true">&#8203;</span>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                    <div class="w-full bg-gray-800 text-white px-4 py-4">
                        <h2 class="text-xl">Modificar tarea</h2>
                    </div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-xl leading-6 font-medium text-gray-900" id="modal-title">
                                    Modificar de tarea
                                </h3>
                            </div>
                        </div>
                        @if ($success)
                            <div class="text-center">
                                <i class="text-green-600 far fa-check-circle text-9xl mx-auto"></i>
                                <p class="text-2xl font-bold py-4">Tarea registrada con éxito...</p>
                                <div class="mx-auto mt-6">
                                    <a x-on:click="open=!open" wire:click="resetSuccess"
                                        class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <div wire:loading wire:target="updateTask">
                                    <i class="animate-spin text-gray-600 fas fa-spinner text-9xl mx-auto"></i>
                                    <p class="text-2xl font-bold py-4">Registrando tarea...</p>
                                    <div class="mx-auto mt-6">
                                        <a x-on:click="open=!open" wire:click="resetSuccess"
                                            class="bg-gray-700 text-white font-bold px-6 py-2 rounded-lg hover:bg-gray-600">Continuar</a>
                                    </div>
                                </div>
                            </div>
                            <form wire:submit.prevent="updateTask({{ $task }})" wire:loading.remove>
                                <div class="grid grid-cols-2">
                                    <div class="w-full mt-4 px-4">
                                        <label for="" class="block mb-2 ml-1">Nombre:</label>
                                        <input wire:model="name" class="w-full rounded-md py-1" type="text">
                                        @error('name')
                                            <span class="text-xs text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full mt-4 px-4">
                                        <label for="" class="block mb-2 ml-1">Tipo:</label>
                                        <select wire:model="type" class="form-input">
                                            <option value="video_conferencia">Video Conferencia</option>
                                            <option value="reunion">Reunion</option>
                                            <option value="contacto">Contacto</option>
                                            <option value="enviar_email">Enviar email</option>
                                            <option value="llamar">Llamar</option>
                                            <option value="whatsapp">WhatsApp</option>
                                        </select>
                                    </div>
                                    @switch($type)
                                        @case('video_conferencia')
                                            <div
                                                class="grid grid-cols-4 bg-blue-200 w-full col-span-2 rounded-md mt-4 px-3 mx-2 py-2">
                                                <div class="w-full mt-2 px-4 col-span-4">
                                                    <label for="" class="block mb-2 ml-1">Plataforma:</label>
                                                    <select wire:model="platform" class="w-full rounded-md py-1">
                                                        <option value="Zoom">Zoom</option>
                                                        <option value="google_meet">Google Meet</option>
                                                        <option value="Skype">Skype</option>
                                                        <option value="microsoft_teams">Microsoft Team</option>
                                                    </select>
                                                    @error('platform')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="w-full mt-4 px-4 col-span-4">
                                                    <label for="" class="block mb-2 ml-1">Enlace:</label>
                                                    <textarea wire:model="link" rows="1" class="w-full rounded-md"
                                                        placeholder="Aqui puedes ingresar el link de la plataforma en la que realizaras la reunion en linea"></textarea>
                                                    @error('link')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="w-full mt-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Inicio fecha:</label>
                                                    <input wire:model="date_start" class="w-full rounded-md py-1"
                                                        type="date">
                                                </div>
                                                <div class="w-full mt-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Inicio hora:</label>
                                                    <input wire:model="time_start" class="w-full rounded-md py-1"
                                                        type="time">
                                                </div>
                                                <div class="w-full mt-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Fin fecha:</label>
                                                    <input wire:model="date_end" class="w-full rounded-md py-1" type="date">
                                                </div>
                                                <div class="w-full mt-4 mb-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Fin hora:</label>
                                                    <input wire:model="time_end" class="w-full rounded-md py-1" type="time">
                                                </div>
                                            </div>
                                        @break
                                        @case('reunion')
                                            <div
                                                class="grid grid-cols-4 bg-blue-200 w-full col-span-2 rounded-md mt-4 px-3 mx-2 py-2">
                                                <div class="w-full mt-4 px-4 col-span-4">
                                                    <label for="" class="block mb-2 ml-1">Lugar:</label>
                                                    <input wire:model="place" class="form-input border-gray-50 border"
                                                        placeholder="Lugar de la reunion" type="text"></input>
                                                    @error('place')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="w-full mt-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Inicio fecha:</label>
                                                    <input wire:model="date_start" class="w-full rounded-md py-1"
                                                        type="date">
                                                    @error('date_start')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="w-full mt-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Inicio hora:</label>
                                                    <input wire:model="time_start" class="w-full rounded-md py-1"
                                                        type="time">
                                                    @error('time_start')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="w-full mt-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Fin fecha:</label>
                                                    <input wire:model="date_end" class="w-full rounded-md py-1" type="date">
                                                    @error('date_end')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="w-full mt-4 mb-4 px-4">
                                                    <label for="" class="block mb-2 ml-1">Fin hora:</label>
                                                    <input wire:model="time_end" class="w-full rounded-md py-1" type="time">
                                                    @error('time_end')
                                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @break
                                        @default
                                            <div
                                                class="grid grid-cols-4 bg-blue-200 w-full col-span-2 rounded-md mt-4 px-3 mx-2 py-2">
                                                <div class="w-full mt-2 px-4 mb-3 col-span-4">
                                                    <label for="" class="block mb-2 ml-1">Vencimiento:</label>
                                                    <select wire:model="expoption" class="w-full rounded-md py-1">
                                                        {{-- <option value="today">Hoy</option>
                                                            <option value="tomorrow">Mañana</option>
                                                            <option value="this_week">Está semana</option>
                                                            <option value="next_week">Próxima semana</option> --}}
                                                        <option value="date">Fecha especifica</option>
                                                    </select>
                                                </div>
                                                @if ($expoption == 'date')
                                                    <div class="w-full mt-4 px-4 col-span-2">
                                                        <label for="" class="block mb-2 ml-1">Inicio fecha:</label>
                                                        <input wire:model="date_start" class="w-full rounded-md py-1"
                                                            type="date">
                                                    </div>
                                                    <div class="w-full mt-4 mb-4 px-4 col-span-2">
                                                        <label for="" class="block mb-2 ml-1">Fin hora:</label>
                                                        <input wire:model="time_end" class="w-full rounded-md py-1" type="time">
                                                    </div>
                                                @endif
                                            </div>
                                    @endswitch
                                    <div class="w-full mt-2 px-4 col-span-2">
                                        <label for="" class="block mb-2 ml-1">Prioridad:</label>
                                        <select wire:model="priority" class="w-full rounded-md py-1">
                                            <option value="normal">Normal</option>
                                            <option value="alta">Alta</option>
                                        </select>
                                    </div>
                                    <div class="w-full mt-4 px-4 col-span-2">
                                        <label for="" class="block mb-2 ml-1">Observaciones:</label>
                                        <textarea wire:model="observations" rows="4" class="w-full rounded-md"
                                            placeholder=""></textarea>
                                    </div>
                                </div>

                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-1">
                                    <button type="submit"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Actualizar
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

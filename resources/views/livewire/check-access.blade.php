<div class="bg-gray-100">
    <div class="flex justify-center text-4xl text-center pt-6" wire:poll.1000ms='timer'>
        {{ $date }}
        <br>
        {{ $time }}
    </div>

    {{ $access_type }}
    {{ $accesses }}

    <div class="flex justify-center mt-6 w-full">
        <div class="grid grid-cols-1 justify-items-center">
            <x-jet-label value="Imgresa tu codigo de asesor" />
            <x-jet-input type="text" class="w-full font-bold text-center" wire:model="code" placeholder="codigo de asesor"
                wire:keydown.enter='check()' maxlength="4" />
        </div>
    </div>
    @if ($visible)
        <div class="flex justify-center mt-6">
            <div class="grid grid-cols-2 gap-10 justify-items-center">
                <div class="mx-4 my-2">
                    <label for="entrada">
                        <input type="radio" name="access_type" wire:model="access_type" wire:click="check" value="entrada" id="entrada" @if (!$entrada) disabled @endif
                            class="hidden">
                        <i class="fas fa-door-closed text-6xl @if (!$entrada) text-gray-200 @else text-verde @endif"></i>
                    </label>
                </div>
                <div class="mx-4 my-2">
                    <label for="comida_salida">
                        <input type="radio" name="access_type" wire:model="access_type" wire:click="check" value="comida_salida" @if (!$comida_salida) disabled @endif
                            id="comida_salida" class="hidden">
                        <i class="fas fa-cookie text-6xl @if (!$comida_salida) text-gray-200 @else text-yellow-800 @endif"></i>
                    </label>
                </div>
                <div class="mx-4 my-2">
                    <label for="comida_entrada">
                        <input type="radio" name="access_type" wire:model="access_type" wire:click="check" value="comida_entrada" @if (!$comida_entrada) disabled @endif
                            id="comida_entrada" class="hidden">
                        <i class="fas fa-undo text-6xl @if (!$comida_entrada) text-gray-200 @else text-blue-700 @endif"></i>
                    </label>
                </div>
                <div class="mx-4 my-2">
                    <label for="salida">
                        <input type="radio" name="access_type" wire:model="access_type" wire:click="check" value="salida" @if (!$salida) disabled @endif
                            class="hidden" id="salida">
                        <i class="fas fa-door-open text-6xl @if (!$salida) text-gray-200 @else text-red-500 @endif"></i>
                    </label>
                </div>
            </div>
        </div>
    @endif
</div>

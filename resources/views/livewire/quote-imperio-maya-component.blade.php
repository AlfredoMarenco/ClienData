<div>
    @php
        if ($hitch == null) {
            $hitch = 0;
        }
        if ($discount == null) {
            $discount = 0;
        }
    @endphp
    <div class="grid grid-cols-2 gap-6 p-20 shadow-lg mt-4 mb-4">
        <div class="grid grid-cols-2 gap-4 text-xl">
            {{-- <img src="" alt=""> --}}
            <div class="space-y-2">
                <p><span class="font-bold">Plan de pago: Financiamiento</p>
                <p><span class="font-bold">Clave:</span> {{ $lot->clave }}</p>
                <p><span class="font-bold">Superfice:</span> {{ $lot->area }} m<sup>2</sup></p>
                <p><span class="font-bold">Precio por m<sup>2</sup> lista:</span>
                    ${{ number_format($price_list_per_meter, 2) }}</p>
                <p><span class="font-bold">Precio de lista:</span>
                    ${{ number_format($lot->area * $price_list_per_meter, 2) }}</p>
                <p><span class="font-bold">Descuento por m<sup>2</sup>:</span> ${{ number_format($discount, 2) }}</p>
            </div>
            <div class="space-y-2">
                <p> - </p>
                <p> - </p>
                <p> - </p>
                <p><span class="font-bold">Precio por m<sup>2</sup> final:</span>
                    ${{ number_format($price_list_per_meter - $discount, 2) }}</p>
                <p><span class="font-bold">Precio de lista final:</span>
                    ${{ number_format($lot->area * ($price_list_per_meter - $discount) - $hitch, 2) }}</p>
                <p><span class="font-bold">Enganche:</span> ${{ number_format($hitch, 2) }} </p>
            </div>
        </div>
        <div class="text-xl">
            <form class="text-xl space-y-2">
                <label class="block">
                    Enganche:
                </label>
                <x-jet-input class="w-full text-2xl" type="number" wire:model="hitch" />
                <label class="block">
                    Plan de financiamiento:
                </label>
                <select wire:model="financing"
                    class="w-full text-2xl border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    @for ($i = 1; $i <= 60; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <label class="block">
                    Descuento por m<sup>2</sup>:
                </label>
                <x-jet-input class="w-full text-2xl" type="number" wire:model="discount" />
            </form>
        </div>
    </div>
    @if ($hitch > 0)
        <div class="mt-6 mb-6">
            <div class="overflow-x-auto relative shadow-lg sm:rounded-lg">
                <table class="w-full text-left text-gray-500 dark:text-gray-400 text-lg">
                    <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                #
                            </th>
                            <th scope="col" class="py-3 px-6">
                                TIPO DE PAGO
                            </th>
                            <th scope="col" class="py-3 px-6">
                                FECHA DE PAGO
                            </th>
                            <th scope="col" class="py-3 px-6">
                                CAPITAL
                            </th>
                            <th scope="col" class="py-3 px-6">
                                INTERESES
                            </th>
                            <th scope="col" class="py-3 px-6">
                                TOTAL A PAGAR
                            </th>
                            <th scope="col" class="py-3 px-6">
                                SALDO CAPITAL
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="py-4 px-6">
                                A
                            </td>
                            <td class="py-4 px-6">
                                Enganche
                            </td>
                            <td class="py-4 px-6">
                                {{ now()->format('Y-m-d') }}
                            </td>
                            <td class="py-4 px-6">
                                $ {{ number_format($hitch, 2) }}
                            </td>
                            <td class="py-4 px-6">
                                $0.00
                            </td>
                            <td class="py-4 px-6">
                                $ {{ number_format($hitch, 2) }}
                            </td>
                            <td class="py-4 px-6">
                                $ {{ number_format($lot->area * ($price_list_per_meter - $discount) - $hitch, 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    @endif
    <div>
        <div class="overflow-x-auto relative shadow-lg sm:rounded-lg">
            <table class="w-full text-left text-gray-500 dark:text-gray-400 text-lg">
                <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            #
                        </th>
                        <th scope="col" class="py-3 px-6">
                            TIPO DE PAGO
                        </th>
                        <th scope="col" class="py-3 px-6">
                            FECHA DE PAGO
                        </th>
                        <th scope="col" class="py-3 px-6">
                            CAPITAL
                        </th>
                        <th scope="col" class="py-3 px-6">
                            INTERESES
                        </th>
                        <th scope="col" class="py-3 px-6">
                            TOTAL A PAGAR
                        </th>
                        <th scope="col" class="py-3 px-6">
                            SALDO CAPITAL
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $capital = $lot->area * ($price_list_per_meter - $discount) - $hitch;
                        $mensualidad = $capital / $financing;
                        $date = now()->format('Y-m-d');
                        $saldo_capital = $capital - $mensualidad;
                        for ($i = 1; $i <= $financing; $i++) {
                            echo '
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="py-4 px-6">
                                ' .
                                $i .
                                '
                            </td>
                            <td class="py-4 px-6">
                                Mensualidad
                            </td>
                            <td class="py-4 px-6">
                                ' .
                                $date .
                                '
                            </td>
                            <td class="py-4 px-6">
                                $' .
                                number_format($mensualidad, 2) .
                                '
                            </td>
                            <td class="py-4 px-6">
                                $0.00
                            </td>
                            <td class="py-4 px-6">
                                $' .
                                number_format($mensualidad, 2) .
                                '
                            </td>
                            <td class="py-4 px-6">
                                $' .
                                number_format($saldo_capital, 2) .
                                '
                            </td>
                        </tr>';
                            $saldo_capital = $saldo_capital - $mensualidad;
                        }
                    @endphp
                </tbody>
            </table>
        </div>

    </div>
</div>

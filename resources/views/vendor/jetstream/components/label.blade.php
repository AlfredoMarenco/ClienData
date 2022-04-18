@props(['value','color' =>'gray'])

<label {{ $attributes->merge(['class' => "block font-medium text-sm text-$color-700"]) }}>
    {{ $value ?? $slot }}
</label>

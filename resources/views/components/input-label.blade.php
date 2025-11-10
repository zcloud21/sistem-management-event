@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#3D2817] dark:text-[#D9C5B3]']) }}>
    {{ $value ?? $slot }}
</label>

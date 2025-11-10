{{-- resources/views/components/primary-button.blade.php --}}

@props(['tag' => 'button', 'type' => 'submit'])

@php
$classes = 'inline-flex items-center px-4 py-2 bg-[#C17A4A] dark:bg-[#E8A876] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#A8663D] dark:hover:bg-[#D98F5D] focus:bg-[#A8663D] dark:focus:bg-[#D98F5D] active:bg-[#8F522F] dark:active:bg-[#CB7644] focus:outline-none focus:ring-2 focus:ring-[#E8A876] focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
@endphp

@if ($tag == 'a')
{{-- Ini adalah logika yang hilang: jika tag='a', buatlah link <a> --}}
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
@else
{{-- Jika tidak, buatlah tombol <button> --}}
<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>
@endif
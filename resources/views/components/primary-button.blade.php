{{-- resources/views/components/primary-button.blade.php --}}

@props(['tag' => 'button', 'type' => 'submit'])

@php
$classes = 'inline-flex items-center px-4 py-2 bg-[#012A4A] border border-transparent rounded-[8px] font-semibold text-sm text-white tracking-widest hover:bg-[#001F3F] focus:bg-[#001F3F] active:bg-[#001A33] focus:outline-none focus:ring-2 focus:ring-[#001F3F] focus:ring-offset-2 transition ease-in-out duration-150';
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
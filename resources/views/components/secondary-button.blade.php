{{-- resources/views/components/secondary-button.blade.php --}}

@props(['tag' => 'button', 'type' => 'submit'])

@php
$classes = 'inline-flex items-center px-4 py-2 bg-[#E8C4A0] dark:bg-[#7A6B60] border border-[#E8C4A0] dark:border-[#E8A876] rounded-md font-semibold text-xs text-[#3D2817] dark:text-[#F5F1ED] uppercase tracking-widest shadow-sm hover:bg-[#D9B191] dark:hover:bg-[#63574D] focus:outline-none focus:ring-2 focus:ring-[#C17A4A] dark:focus:ring-[#E8A876] focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150';
@endphp

@if ($tag == 'a')
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>
@endif
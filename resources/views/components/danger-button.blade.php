{{-- resources/views/components/danger-button.blade.php --}}

@props(['tag' => 'button', 'type' => 'submit'])

@php
$classes = 'inline-flex items-center px-4 py-2 bg-[#8F522F] dark:bg-[#AF4412] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#764024] dark:hover:bg-[#CB7644] focus:bg-[#764024] dark:focus:bg-[#CB7644] active:bg-[#5D2E19] dark:active:bg-[#BD5D2B] focus:outline-none focus:ring-2 focus:ring-[#E8A876] focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150';
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
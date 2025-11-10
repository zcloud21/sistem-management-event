@props(['message', 'type' => 'info'])

@php
    $typeClasses = match($type) {
        'danger' => 'bg-[#8F522F]/10 dark:bg-[#AF4412]/10 border-l-4 border-[#8F522F] dark:border-[#AF4412] text-[#3D2817] dark:text-[#F5F1ED]',
        'warning' => 'bg-[#E8A876]/10 dark:bg-[#D98F5D]/10 border-l-4 border-[#E8A876] dark:border-[#D98F5D] text-[#3D2817] dark:text-[#F5F1ED]',
        'success' => 'bg-[#C17A4A]/10 dark:bg-[#E8A876]/10 border-l-4 border-[#C17A4A] dark:border-[#E8A876] text-[#3D2817] dark:text-[#F5F1ED]',
        'info' => 'bg-[#E8C4A0]/10 dark:bg-[#7A6B60]/10 border-l-4 border-[#E8C4A0] dark:border-[#7A6B60] text-[#3D2817] dark:text-[#F5F1ED]',
        default => 'bg-[#E8C4A0]/10 dark:bg-[#7A6B60]/10 border-l-4 border-[#E8C4A0] dark:border-[#7A6B60] text-[#3D2817] dark:text-[#F5F1ED]',
    };
    
    $icon = match($type) {
        'danger' => '<svg class="h-5 w-5 text-[#8F522F] dark:text-[#AF4412]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>',
        'warning' => '<svg class="h-5 w-5 text-[#E8A876] dark:text-[#D98F5D]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>',
        'success' => '<svg class="h-5 w-5 text-[#C17A4A] dark:text-[#E8A876]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'info' => '<svg class="h-5 w-5 text-[#E8C4A0] dark:text-[#7A6B60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        default => '<svg class="h-5 w-5 text-[#E8C4A0] dark:text-[#7A6B60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
    };
@endphp

<div {{ $attributes->merge(['class' => "p-4 rounded-md $typeClasses"]) }}>
    <div class="flex">
        <div class="flex-shrink-0">
            {!! $icon !!}
        </div>
        <div class="ml-3">
            <p class="text-sm">
                {{ $message }}
            </p>
        </div>
    </div>
</div>
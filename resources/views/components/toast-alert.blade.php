@props(['message', 'type' => 'info', 'timeout' => 5000])

@php
    $typeClasses = match($type) {
        'danger' => 'bg-[#8F522F] dark:bg-[#AF4412] text-white',
        'warning' => 'bg-[#E8A876] dark:bg-[#D98F5D] text-[#3D2817] dark:text-[#F5F1ED]',
        'success' => 'bg-[#C17A4A] dark:bg-[#E8A876] text-white',
        'info' => 'bg-[#E8C4A0] dark:bg-[#7A6B60] text-[#3D2817] dark:text-[#F5F1ED]',
        default => 'bg-[#C17A4A] dark:bg-[#E8A876] text-white',
    };
    
    $icon = match($type) {
        'danger' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        'warning' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>',
        'success' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>',
        'info' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
        default => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
    };
@endphp

<div 
    x-data="{ show: false, message: '{{ $message }}' }"
    x-init="
        setTimeout(() => { show = true; }, 100);
        setTimeout(() => { show = false; }, {{ $timeout }});
        document.addEventListener('show-toast', (e) => {
            message = e.detail.message || '{{ $message }}';
            type = e.detail.type || '{{ $type }}';
            show = true;
            setTimeout(() => { show = false; }, {{ $timeout }});
        });
    "
    x-show="show"
    x-transition:enter="transform ease-out duration-300 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:pt-24 sm:items-start sm:justify-end z-50"
    style="display: none;"
>
    <div class="max-w-sm w-full bg-[#F2DFD3] dark:bg-[#2B2420] shadow-lg rounded-lg pointer-events-auto border border-[#E0D0C0] dark:border-[#4A4038]">
        <div class="rounded-lg shadow-xs overflow-hidden" :class="'{{ $typeClasses }}'">
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        {!! $icon !!}
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm font-medium" x-text="message"></p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="show = false" class="inline-flex text-white hover:text-[#E8A876] focus:outline-none">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
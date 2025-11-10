{{-- resources/views/components/responsive-grid.blade.php --}}

@props(['items'])

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    {{ $slot }}
</div>
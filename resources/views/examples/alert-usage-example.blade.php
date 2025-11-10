<!-- Example: How to use alerts in event creation form -->
<form method="POST" action="{{ route('events.store') }}" id="create-event-form">
    @csrf
    
    <div class="mb-4">
        <x-input-label for="event_name" :value="__('Event Name')" />
        <x-text-input id="event_name" class="block mt-1 w-full" type="text" name="event_name" :value="old('event_name')" required />
        <x-input-error :messages="$errors->get('event_name')" class="mt-2" />
    </div>

    <!-- Include success alert for form -->
    @if(session('success'))
        <x-inline-alert type="success" message="{{ session('success') }}" class="mb-4" />
    @endif

    <div class="flex items-center gap-4">
        <x-primary-button type="submit">
            {{ __('Create Event') }}
        </x-primary-button>
    </div>
</form>

<!-- JavaScript for handling form submission with toast notification -->
<script>
document.getElementById('create-event-form').addEventListener('submit', function(e) {
    // Show toast notification on successful submission
    document.dispatchEvent(new CustomEvent('show-toast', { 
        detail: { 
            message: 'Event created successfully!', 
            type: 'success' 
        } 
    }));
});
</script>
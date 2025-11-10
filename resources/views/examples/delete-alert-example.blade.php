<!-- Delete button with modal confirmation -->
<button 
    @click="document.dispatchEvent(new CustomEvent('show-alert-delete-{{ $event->id }}'))"
    class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300"
>
    Delete
</button>

<!-- Delete Confirmation Modal -->
<x-alert-modal 
    id="delete-{{ $event->id }}" 
    title="Delete Event" 
    message="Are you sure you want to delete the event '{{ $event->event_name }}'? This action cannot be undone and will permanently remove all associated data." 
    type="danger"
    action="window.location='{{ route('events.destroy', $event) }}'"
    cancel=""
/>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3D2817] dark:text-[#F5F1ED] leading-tight">
            {{ __('Alert Examples') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#F2DFD3] dark:bg-[#2B2420] overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-[#3D2817] dark:text-[#F5F1ED]">
                    <h1 class="text-3xl font-bold mb-6">Alert Components Demo</h1>
                    
                    <!-- Toast Alerts -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-4">Toast Notifications</h2>
                        <div class="flex flex-wrap gap-4">
                            <button @click="document.dispatchEvent(new CustomEvent('show-toast', { detail: { message: 'Data added successfully!', type: 'success' }}))" class="btn-primary">
                                Show Success Toast
                            </button>
                            <button @click="document.dispatchEvent(new CustomEvent('show-toast', { detail: { message: 'Warning: Please check your input', type: 'warning' }}))" class="btn-secondary">
                                Show Warning Toast
                            </button>
                            <button @click="document.dispatchEvent(new CustomEvent('show-toast', { detail: { message: 'Error occurred while saving data', type: 'danger' }}))" class="btn-secondary-outline">
                                Show Error Toast
                            </button>
                        </div>
                    </div>
                    
                    <!-- Inline Alerts -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-4">Inline Alerts</h2>
                        <div class="space-y-4">
                            <x-inline-alert type="success" message="Data has been successfully saved!" />
                            <x-inline-alert type="warning" message="Please review the data before submitting." />
                            <x-inline-alert type="danger" message="An error occurred while processing your request." />
                            <x-inline-alert type="info" message="This is an informational message." />
                        </div>
                    </div>
                    
                    <!-- Modal Alerts -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-4">Modal Alerts (Confirmation)</h2>
                        <div class="flex flex-wrap gap-4">
                            <button @click="document.dispatchEvent(new CustomEvent('show-alert-delete'))" class="btn-primary">
                                Delete Confirmation
                            </button>
                            <button @click="document.dispatchEvent(new CustomEvent('show-alert-edit'))" class="btn-secondary">
                                Edit Confirmation
                            </button>
                            <button @click="document.dispatchEvent(new CustomEvent('show-alert-add'))" class="btn-secondary-outline">
                                Add Confirmation
                            </button>
                        </div>
                    </div>
                    
                    <!-- Inline Form with Alerts -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold mb-4">Form with Inline Alerts</h2>
                        <div class="bg-[#F7F1ED] dark:bg-[#1A1410] p-6 rounded-lg">
                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>
                                
                                <div class="mb-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>
                                
                                <!-- Form Inline Alert -->
                                <div class="mb-4">
                                    <x-inline-alert type="info" message="Fill in all required fields before submitting the form." />
                                </div>
                                
                                <div class="flex items-center gap-4">
                                    <x-primary-button type="submit">
                                        {{ __('Save') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Delete Confirmation Modal -->
    <x-alert-modal 
        id="delete" 
        title="Delete Item" 
        message="Are you sure you want to delete this item? This action cannot be undone." 
        type="danger"
        action="alert('Deleted!')"
        cancel="alert('Cancelled!')"
    />
    
    <!-- Edit Confirmation Modal -->
    <x-alert-modal 
        id="edit" 
        title="Edit Confirmation" 
        message="Are you sure you want to save these changes? This will update the existing record." 
        type="warning"
        action="alert('Updated!')"
        cancel="alert('Cancelled!')"
    />
    
    <!-- Add Confirmation Modal -->
    <x-alert-modal 
        id="add" 
        title="Add Confirmation" 
        message="Are you ready to add this new item? Please confirm all details are correct." 
        type="success"
        action="alert('Added!')"
        cancel="alert('Cancelled!')"
    />
    
    <!-- Toast Alert Component -->
    <x-toast-alert message="This is a toast notification" type="info" timeout="5000" />
</x-app-layout>
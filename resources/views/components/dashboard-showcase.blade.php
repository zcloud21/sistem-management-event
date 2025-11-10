<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3D2817] dark:text-[#F5F1ED] leading-tight">
            {{ __('Dashboard - Warm Beige Theme') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <div class="bg-[#F2DFD3] dark:bg-[#2B2420] overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-[#3D2817] dark:text-[#F5F1ED]">
                        <h1 class="text-3xl font-bold mb-6">Warm Beige Design System</h1>
                        <p class="mb-4">This dashboard demonstrates the warm beige color palette with elegant and approachable design.</p>
                        
                        <!-- Theme Toggle -->
                        <div class="mb-6">
                            <x-theme-toggle />
                        </div>
                        
                        <!-- Buttons showcase -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-4">Button Styles</h2>
                            <div class="flex flex-wrap gap-4">
                                <x-primary-button>Primary Button</x-primary-button>
                                <x-secondary-button>Secondary Button</x-secondary-button>
                                <x-danger-button>Danger Button</x-danger-button>
                                <button class="btn-primary">Custom Primary</button>
                                <button class="btn-secondary">Custom Secondary</button>
                                <button class="btn-secondary-outline">Secondary Outline</button>
                            </div>
                        </div>
                        
                        <!-- Form elements showcase -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-4">Form Elements</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card showcase -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-4">Card Components</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="card">
                                    <h3 class="text-lg font-medium mb-2">Event Management</h3>
                                    <p class="text-sm">Manage your events with our intuitive dashboard.</p>
                                </div>
                                
                                <div class="card">
                                    <h3 class="text-lg font-medium mb-2">Guest Tracking</h3>
                                    <p class="text-sm">Track and manage your event guests efficiently.</p>
                                </div>
                                
                                <div class="card">
                                    <h3 class="text-lg font-medium mb-2">Ticket Sales</h3>
                                    <p class="text-sm">Monitor your ticket sales and revenue streams.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Responsive Grid Showcase -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-4">Responsive Grid</h2>
                            <x-responsive-grid>
                                <div class="card p-4">
                                    <h3 class="font-medium">Item 1</h3>
                                    <p class="text-sm">Responsive item</p>
                                </div>
                                <div class="card p-4">
                                    <h3 class="font-medium">Item 2</h3>
                                    <p class="text-sm">Responsive item</p>
                                </div>
                                <div class="card p-4">
                                    <h3 class="font-medium">Item 3</h3>
                                    <p class="text-sm">Responsive item</p>
                                </div>
                                <div class="card p-4">
                                    <h3 class="font-medium">Item 4</h3>
                                    <p class="text-sm">Responsive item</p>
                                </div>
                            </x-responsive-grid>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
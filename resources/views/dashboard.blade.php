<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-[#1A1A1A] leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total Events Card -->
                <div class="bg-white border border-[#E0E0E0] overflow-hidden shadow-soft-shadow rounded-[18px]">
                    <div class="p-6 flex items-center">
                        <div class="bg-[#F0F0F0] rounded-full p-3">
                            <svg class="w-6 h-6 text-[#27AE60]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium text-gray-500">Total Events</div>
                            <div class="text-4xl font-bold text-[#1A1A1A]">12</div>
                        </div>
                    </div>
                </div>

                <!-- Total Guests Card -->
                <div class="bg-white border border-[#E0E0E0] overflow-hidden shadow-soft-shadow rounded-[18px]">
                    <div class="p-6 flex items-center">
                        <div class="bg-[#F0F0F0] rounded-full p-3">
                            <svg class="w-6 h-6 text-[#27AE60]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.184-1.26-.5-1.8"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8zM3 20v-2c0-3.313 2.687-6 6-6h2"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium text-gray-500">Total Guests</div>
                            <div class="text-4xl font-bold text-[#1A1A1A]">1,234</div>
                        </div>
                    </div>
                </div>

                <!-- Tickets Sold Card -->
                <div class="bg-white border border-[#E0E0E0] overflow-hidden shadow-soft-shadow rounded-[18px]">
                    <div class="p-6 flex items-center">
                        <div class="bg-[#F0F0F0] rounded-full p-3">
                            <svg class="w-6 h-6 text-[#27AE60]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5h14a2 2 0 012 2v3a2 2 0 000 4v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 000-4V7a2 2 0 012-2h14z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium text-gray-500">Tickets Sold</div>
                            <div class="text-4xl font-bold text-[#1A1A1A]">5,678</div>
                        </div>
                    </div>
                </div>

                <!-- Revenue Card -->
                <div class="bg-white border border-[#000000] overflow-hidden shadow-soft-shadow rounded-[18px]">
                    <div class="p-6 flex items-center">
                        <div class="bg-[#F0F0F0] rounded-full p-3">
                            <svg class="w-6 h-6 text-[#27AE60]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.313 0-6 2.687-6 6s2.687 6 6 6 6-2.687 6-6-2.687-6-6-6zm0 0V4m0 8v-2"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18v-2"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium text-gray-500">Revenue</div>
                            <div class="text-4xl font-bold text-[#1A1A1A]">$12,345</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
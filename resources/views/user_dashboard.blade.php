<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3D2817] dark:text-[#F5F1ED] leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Revenue Report & Filters -->
            <div class="bg-[#F2DFD3] dark:bg-[#2B2420] overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 border-b border-[#E0D0C0] dark:border-[#4A4038]">
                    <h3 class="text-xl font-semibold text-[#3D2817] dark:text-[#F5F1ED]">Revenue Report</h3>
                    <form method="GET" action="{{ route('dashboard') }}" class="mt-4">
                        <div class="flex flex-wrap items-end gap-4">
                            <!-- Filter by Period -->
                            <div>
                                <label for="filter_period" class="block text-sm font-medium text-[#3D2817] dark:text-[#D9C5B3]">Period</label>
                                <select name="filter_period" id="filter_period" class="mt-1 block w-full md:w-auto border-[#D4CDC4] dark:border-[#504238] bg-[#FAF7F2] dark:bg-[#251E19] text-[#3D2817] dark:text-[#F5F1ED] focus:border-[#9C8B7B] dark:focus:border-[#C17A4A] focus:ring-[#9C8B7B] dark:focus:ring-[#C17A4A] rounded-md shadow-sm">
                                    <option value="">All Time</option>
                                    <option value="daily" {{ request('filter_period') == 'daily' ? 'selected' : '' }}>Today</option>
                                    <option value="monthly" {{ request('filter_period') == 'monthly' ? 'selected' : '' }}>This Month</option>
                                    <option value="yearly" {{ request('filter_period') == 'yearly' ? 'selected' : '' }}>This Year</option>
                                </select>
                            </div>
                            <!-- Filter by Event -->
                            <div>
                                <label for="filter_event_id" class="block text-sm font-medium text-[#3D2817] dark:text-[#D9C5B3]">Event</label>
                                <select name="filter_event_id" id="filter_event_id" class="mt-1 block w-full md:w-auto border-[#D4CDC4] dark:border-[#504238] bg-[#FAF7F2] dark:bg-[#251E19] text-[#3D2817] dark:text-[#F5F1ED] focus:border-[#9C8B7B] dark:focus:border-[#C17A4A] focus:ring-[#9C8B7B] dark:focus:ring-[#C17A4A] rounded-md shadow-sm">
                                    <option value="">All Events</option>
                                    @foreach($eventsForFilter as $event)
                                        <option value="{{ $event->id }}" {{ request('filter_event_id') == $event->id ? 'selected' : '' }}>{{ $event->event_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Submit Button -->
                            <x-primary-button type="submit">
                                Filter
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                <div class="p-6 bg-[#F7F1ED] dark:bg-[#1A1410]">
                    <h4 class="text-lg font-semibold text-[#5D4037] dark:text-[#D9C5B3]">Total Revenue (Filtered)</h4>
                    <p class="text-4xl font-bold text-[#3D2817] dark:text-[#F5F1ED] mt-2">Rp {{ number_format($totalRevenue, 2) }}</p>
                </div>
            </div>

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Total Events -->
                <div class="bg-[#F2DFD3] dark:bg-[#2B2420] rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-[#E8C4A0] dark:bg-[#7A6B60]">
                            <svg class="w-8 h-8 text-[#3D2817] dark:text-[#F5F1ED]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-[#5D4037] dark:text-[#D9C5B3]">Total Events</h2>
                            <p class="text-3xl font-bold text-[#3D2817] dark:text-[#F5F1ED]">{{ $totalEvents }}</p>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="bg-[#F2DFD3] dark:bg-[#2B2420] rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-[#E8C4A0] dark:bg-[#7A6B60]">
                            <svg class="w-8 h-8 text-[#3D2817] dark:text-[#F5F1ED]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-[#5D4037] dark:text-[#D9C5B3]">Upcoming Events</h2>
                            <p class="text-3xl font-bold text-[#3D2817] dark:text-[#F5F1ED]">{{ $upcomingEventsCount }}</p>
                        </div>
                    </div>
                </div>

                <!-- Total Guests -->
                <div class="bg-[#F2DFD3] dark:bg-[#2B2420] rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-[#E8C4A0] dark:bg-[#7A6B60]">
                            <svg class="w-8 h-8 text-[#3D2817] dark:text-[#F5F1ED]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-[#5D4037] dark:text-[#D9C5B3]">Total Guests</h2>
                            <p class="text-3xl font-bold text-[#3D2817] dark:text-[#F5F1ED]">{{ $totalGuests }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Recent Events -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Events List -->
                <div class="lg:col-span-2 bg-[#F2DFD3] dark:bg-[#2B2420] overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-semibold text-[#3D2817] dark:text-[#F5F1ED]">My Recent Events</h3>
                            <a href="{{ route('events.index') }}" class="text-sm text-[#C17A4A] hover:underline">View All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-[#E0D0C0] dark:divide-[#4A4038]">
                                <thead class="bg-[#F7F1ED] dark:bg-[#1A1410]">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#5D4037] dark:text-[#D9C5B3] uppercase tracking-wider">Event Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#5D4037] dark:text-[#D9C5B3] uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#5D4037] dark:text-[#D9C5B3] uppercase tracking-wider">Guests</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Manage</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-[#F7F1ED] dark:bg-[#1A1410] divide-y divide-[#E0D0C0] dark:divide-[#4A4038]">
                                    @forelse ($recentEvents as $event)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#3D2817] dark:text-[#F5F1ED]">{{ $event->event_name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-[#5D4037] dark:text-[#D9C5B3]">{{ \Carbon\Carbon::parse($event->start_time)->format('M d, Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-[#5D4037] dark:text-[#D9C5B3]">{{ $event->guests_count }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('events.show', $event) }}" class="text-[#C17A4A] hover:text-[#A8663D] dark:text-[#E8A876] dark:hover:text-[#D98F5D]">Manage</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="px-6 py-4 text-center text-sm text-[#5D4037] dark:text-[#D9C5B3]">
                                                You haven't created any events yet.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-[#F2DFD3] dark:bg-[#2B2420] overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-[#3D2817] dark:text-[#F5F1ED] mb-4">Quick Actions</h3>
                    <div class="space-y-4">
                        <a href="{{ route('events.create') }}" class="w-full flex items-center justify-center bg-[#C17A4A] hover:bg-[#A8663D] text-white py-3 px-4 rounded-lg text-center transition duration-200">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <span>Create New Event</span>
                        </a>
                        <a href="{{ route('venues.index') }}" class="w-full flex items-center justify-center bg-[#E8C4A0] hover:bg-[#D9B191] text-[#3D2817] dark:bg-[#7A6B60] dark:text-[#F5F1ED] dark:hover:bg-[#63574D] py-3 px-4 rounded-lg text-center transition duration-200">
                             <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Browse Venues</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

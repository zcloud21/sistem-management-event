<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-text-primary leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Revenue Report & Filters -->
            <div class="bg-surface-light border border-gray-200 overflow-hidden shadow-soft-shadow rounded-[18px] mb-8">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-text-primary">Revenue Report</h3>
                        <form method="GET" action="{{ route('dashboard') }}" id="filterForm">
                            <div class="flex items-center bg-gray-100 rounded-lg p-1">
                                @php
                                    $currentPeriod = request('filter_period', 'monthly');
                                @endphp
                                <input type="hidden" name="filter_period" id="filter_period" value="{{ $currentPeriod }}">
                                <button type="submit" name="filter_period" value="daily"
                                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors
                                        {{ $currentPeriod == 'daily' ? 'bg-white text-primary shadow' : 'text-text-secondary hover:bg-gray-200' }}">
                                    Daily
                                </button>
                                <button type="submit" name="filter_period" value="weekly"
                                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors
                                        {{ $currentPeriod == 'weekly' ? 'bg-white text-primary shadow' : 'text-text-secondary hover:bg-gray-200' }}">
                                    Weekly
                                </button>
                                <button type="submit" name="filter_period" value="monthly"
                                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors
                                        {{ $currentPeriod == 'monthly' ? 'bg-white text-primary shadow' : 'text-text-secondary hover:bg-gray-200' }}">
                                    Monthly
                                </button>
                                <button type="submit" name="filter_period" value="yearly"
                                        class="px-4 py-2 text-sm font-medium rounded-md transition-colors
                                        {{ $currentPeriod == 'yearly' ? 'bg-white text-primary shadow' : 'text-text-secondary hover:bg-gray-200' }}">
                                    Yearly
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="p-6 bg-background-light">
                    <canvas id="revenueChart" height="120"></canvas>
                </div>
            </div>

            @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctx = document.getElementById('revenueChart').getContext('2d');
                    const revenueChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: {!! json_encode($revenueData['labels']) !!},
                            datasets: [{
                                label: 'Revenue',
                                data: {!! json_encode($revenueData['data']) !!},
                                backgroundColor: 'rgba(1, 42, 74, 0.2)',
                                borderColor: 'rgba(1, 42, 74, 1)',
                                borderWidth: 1,
                                tension: 0.4,
                                fill: true,
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>
            @endpush

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Total Events -->
                <div class="bg-surface-light border border-gray-200 rounded-[18px] shadow-soft-shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-gray-100">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-text-secondary">Total Events</h2>
                            <p class="text-3xl font-bold text-text-primary">{{ $totalEvents }}</p>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="bg-surface-light border border-gray-200 rounded-[18px] shadow-soft-shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-gray-100">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-text-secondary">Upcoming Events</h2>
                            <p class="text-3xl font-bold text-text-primary">{{ $upcomingEventsCount }}</p>
                        </div>
                    </div>
                </div>

                <!-- Total Guests -->
                <div class="bg-surface-light border border-gray-200 rounded-[18px] shadow-soft-shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-gray-100">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-text-secondary">Total Guests</h2>
                            <p class="text-3xl font-bold text-text-primary">{{ $totalGuests }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Recent Events -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Events List -->
                <div class="lg:col-span-2 bg-surface-light border border-gray-200 overflow-hidden shadow-soft-shadow sm:rounded-[18px]">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-semibold text-text-primary">My Recent Events</h3>
                            <a href="{{ route('events.index') }}" class="text-sm text-primary hover:underline">View All</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-text-secondary uppercase tracking-wider">Event Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-text-secondary uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-text-secondary uppercase tracking-wider">Guests</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Manage</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-surface-light divide-y divide-gray-200">
                                    @forelse ($recentEvents as $event)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-text-primary">{{ $event->event_name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-text-secondary">{{ \Carbon\Carbon::parse($event->start_time)->format('M d, Y') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-text-secondary">{{ $event->guests_count }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('events.show', $event) }}" class="text-primary hover:text-accent-green">Manage</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="px-6 py-4 text-center text-sm text-text-secondary">
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
                <div class="bg-surface-light border border-gray-200 overflow-hidden shadow-soft-shadow sm:rounded-[18px] p-6">
                    <h3 class="text-xl font-semibold text-text-primary mb-4">Quick Actions</h3>
                    <div class="space-y-4">
                        <a href="{{ route('events.create') }}" class="w-full flex items-center justify-center bg-primary hover:bg-primary-dark text-white py-3 px-4 rounded-lg text-center transition duration-200">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <span>Create New Event</span>
                        </a>
                        <a href="{{ route('venues.index') }}" class="w-full flex items-center justify-center bg-gray-200 hover:bg-gray-300 text-text-primary py-3 px-4 rounded-lg text-center transition duration-200">
                             <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Browse Venues</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
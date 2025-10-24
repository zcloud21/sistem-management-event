<nav
    x-data="{ open: true }"
    class="fixed top-0 left-0 h-full bg-gradient-to-b from-slate-900 to-slate-800 text-white z-50 transition-all duration-300 ease-in-out"
    :class="open ? 'w-64' : 'w-20'">
    <!-- Primary Navigation Menu -->
    <div class="flex flex-col h-full">
        <!-- Logo Section -->
        <div class="p-6 border-b border-slate-700 flex items-center justify-between">
            <a href="{{ route('dashboard') }}" class="flex items-center justify-center flex-1">
                <!-- Teks logo disembunyikan jika sidebar ditutup -->
                <div class="flex items-center justify-center font-bold text-sm" x-show="open" x-transition>
                    Sistem Management Event
                </div>
            </a>
            <!-- Toggle Button -->
            <button @click="open = !open" class="p-2 rounded-lg hover:bg-slate-700 transition duration-200">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path x-show="!open" x-transition stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" x-transition stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="flex-1 flex flex-col justify-between py-6 px-2">
            <div class="space-y-2">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200 hover:bg-slate-700 active:bg-blue-500">
                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-3m2 3l2-3m6 0l2 3m2-3l2 3M3 6h18M3 18h18" />
                    </svg>
                    <span class="text-sm font-medium" x-show="open" x-transition>Dashboard</span>
                </a>

                <!-- Venue -->
                <a href="{{ route('venues.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200 hover:bg-slate-700 active:bg-blue-500">
                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="text-sm font-medium" x-show="open" x-transition>Venue</span>
                </a>
                <!-- Event -->
                <a href="{{ route('events.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg transition duration-200 hover:bg-slate-700 active:bg-blue-500">
                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="text-sm font-medium" x-show="open" x-transition>Event</span>
                </a>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="p-4 border-t border-slate-700 space-y-3">
            <div class="flex items-center gap-3 px-2 py-2">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center flex-shrink-0">
                    <span class="text-sm font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
                <!-- Sembunyikan teks profil saat sidebar kecil -->
                <div class="flex-1 min-w-0" x-show="open" x-transition>
                    <p class="text-sm font-medium truncate">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-slate-400 truncate">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                </div>
            </div>

            <div x-show="open" x-transition>
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 w-full px-3 py-2 rounded-lg text-sm text-slate-300 hover:bg-slate-700 transition duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Pengaturan</span>
                </a>

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 w-full px-3 py-2 rounded-lg text-sm text-slate-300 hover:bg-red-500/10 hover:text-red-400 transition duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Main content shift -->
<div class="transition-all duration-300 ease-in-out" :class="open ? 'sm:ml-64' : 'sm:ml-20'">
    <!-- Your page content goes here -->
</div>
<x-guest-layout>
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-6">
                <div class="h-32 bg-gradient-to-r from-[#012A4A] to-[#013d70]"></div>
                <div class="px-8 pb-8">
                    <div class="flex flex-col md:flex-row items-start md:items-end gap-6 -mt-16">
                        <!-- Logo -->
                        <div class="w-32 h-32 bg-white rounded-2xl shadow-lg border-4 border-white overflow-hidden flex-shrink-0">
                            @if($vendor->logo_path)
                                <img src="{{ asset('storage/' . $vendor->logo_path) }}" 
                                     alt="{{ $vendor->brand_name }}" 
                                     class="w-full h-full object-contain p-2">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-400 text-4xl font-bold">
                                    {{ substr($vendor->brand_name ?? 'V', 0, 1) }}
                                </div>
                            @endif
                        </div>

                        <!-- Vendor Info -->
                        <div class="flex-1">
                            <h1 class="text-3xl font-bold text-[#1A1A1A] mb-2">
                                {{ $vendor->brand_name ?? $vendor->user->name }}
                            </h1>
                            @if($vendor->serviceType)
                                <span class="inline-block px-4 py-1 bg-[#27AE60] text-white text-sm font-medium rounded-full">
                                    {{ $vendor->serviceType->name }}
                                </span>
                            @endif
                        </div>

                        <!-- Contact Button -->
                        @if($vendor->whatsapp)
                            <a href="https://wa.me/{{ $vendor->whatsapp }}" 
                               target="_blank"
                               class="px-6 py-3 bg-green-500 text-white rounded-lg font-medium hover:bg-green-600 transition flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                Hubungi via WhatsApp
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Description -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-semibold text-[#1A1A1A] mb-4">Tentang Kami</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $vendor->description }}</p>
                    </div>

                    <!-- Operating Hours -->
                    @if($vendor->operating_hours)
                        <div class="bg-white rounded-2xl shadow-sm p-6">
                            <h2 class="text-xl font-semibold text-[#1A1A1A] mb-4">Jam Operasional</h2>
                            <div class="space-y-2">
                                @php
                                    $dayLabels = [
                                        'monday' => 'Senin',
                                        'tuesday' => 'Selasa',
                                        'wednesday' => 'Rabu',
                                        'thursday' => 'Kamis',
                                        'friday' => 'Jumat',
                                        'saturday' => 'Sabtu',
                                        'sunday' => 'Minggu',
                                    ];
                                @endphp

                                @foreach($dayLabels as $key => $label)
                                    <div class="flex justify-between items-center py-2 border-b border-gray-100 last:border-0">
                                        <span class="font-medium text-[#1A1A1A]">{{ $label }}</span>
                                        @if(isset($vendor->operating_hours[$key]))
                                            @if(isset($vendor->operating_hours[$key]['is_closed']) && $vendor->operating_hours[$key]['is_closed'])
                                                <span class="text-red-500 font-medium">Tutup</span>
                                            @else
                                                <span class="text-gray-600">
                                                    {{ $vendor->operating_hours[$key]['open'] ?? '-' }} - {{ $vendor->operating_hours[$key]['close'] ?? '-' }}
                                                </span>
                                            @endif
                                        @else
                                            <span class="text-gray-400">-</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Contact Information -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-semibold text-[#1A1A1A] mb-4">Informasi Kontak</h2>
                        <div class="space-y-4">
                            @if($vendor->contact_person)
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#27AE60] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Contact Person</p>
                                        <p class="text-sm font-medium text-[#1A1A1A]">{{ $vendor->contact_person }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($vendor->phone_number)
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#27AE60] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Telepon</p>
                                        <a href="tel:{{ $vendor->phone_number }}" class="text-sm font-medium text-[#1A1A1A] hover:text-[#27AE60]">
                                            {{ $vendor->phone_number }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if($vendor->email)
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#27AE60] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Email</p>
                                        <a href="mailto:{{ $vendor->email }}" class="text-sm font-medium text-[#1A1A1A] hover:text-[#27AE60] break-all">
                                            {{ $vendor->email }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            @if($vendor->location || $vendor->address)
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#27AE60] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div>
                                        <p class="text-xs text-gray-500">Lokasi</p>
                                        <p class="text-sm font-medium text-[#1A1A1A]">
                                            {{ $vendor->location }}
                                        </p>
                                        @if($vendor->address)
                                            <p class="text-xs text-gray-600 mt-1">{{ $vendor->address }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Social Media -->
                    @if($vendor->instagram || $vendor->tiktok || $vendor->facebook)
                        <div class="bg-white rounded-2xl shadow-sm p-6">
                            <h2 class="text-xl font-semibold text-[#1A1A1A] mb-4">Media Sosial</h2>
                            <div class="space-y-3">
                                @php
                                    $instagramUsername = $vendor->instagram ?? null;
                                    $instagramUrl = $instagramUsername ? 'https://www.instagram.com/' . $instagramUsername : null;
                                @endphp

                                @if($instagramUrl)
                                    <a href="{{ $instagramUrl }}" 
                                       target="_blank"
                                       class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition">
                                        <div class="w-10 h-10 bg-gradient-to-tr from-purple-600 via-pink-600 to-orange-500 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-[#1A1A1A]">Instagram</p>
                                            <p class="text-xs text-gray-500">{{ $instagramUsername }}</p>
                                        </div>
                                    </a>
                                @endif

                                @php
                                    $tiktokUsername = $vendor->tiktok ?? null;
                                    $tiktokUrl = $tiktokUsername ? 'https://www.tiktok.com/@' . $tiktokUsername : null;
                                @endphp

                                @if($tiktokUrl)
                                    <a href="{{ $tiktokUrl }}" 
                                       target="_blank"
                                       class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition">
                                        <div class="w-10 h-10 bg-black rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-[#1A1A1A]">TikTok</p>
                                            <p class="text-xs text-gray-500">{{ $tiktokUsername }}</p>
                                        </div>
                                    </a>
                                @endif

                                @php
                                    $facebookUrl = $vendor->facebook ?? null;
                                @endphp

                                @if($facebookUrl)
                                    <a href="{{ $facebookUrl }}" 
                                       target="_blank"
                                       class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition">
                                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-[#1A1A1A]">Facebook</p>
                                            <p class="text-xs text-gray-500">Kunjungi halaman</p>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-8 text-center">
                <a href="{{ url('/') }}" 
                   class="inline-flex items-center gap-2 text-[#012A4A] hover:text-[#013d70] font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>

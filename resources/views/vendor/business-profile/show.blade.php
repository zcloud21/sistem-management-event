<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">
        <!-- Hero Section - Compact -->
        <div class="relative bg-gradient-to-r from-slate-800 to-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Back Button -->
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-white/80 hover:text-white mb-6 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali
                </a>

                <!-- Vendor Header -->
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                    <!-- Logo -->
                    <div class="w-24 h-24 md:w-32 md:h-32 bg-white rounded-2xl shadow-xl flex-shrink-0 overflow-hidden">
                        @if($vendor->logo_path)
                            <img src="{{ asset('storage/' . $vendor->logo_path) }}" alt="{{ $vendor->brand_name }}" class="w-full h-full object-contain p-2">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-200 to-slate-300 text-slate-600 text-3xl font-bold">
                                {{ substr($vendor->brand_name ?? 'V', 0, 1) }}
                            </div>
                        @endif
                    </div>

                    <!-- Info -->
                    <div class="flex-1">
                        <h1 class="text-2xl md:text-3xl font-bold mb-2">{{ $vendor->brand_name ?? $vendor->user->name }}</h1>
                        <div class="flex flex-wrap gap-2 mb-3">
                            @if($vendor->serviceType)
                                <span class="px-3 py-1 bg-emerald-500 text-white text-xs font-medium rounded-full">{{ $vendor->serviceType->name }}</span>
                            @endif
                            <span class="px-3 py-1 bg-white/20 text-white text-xs font-medium rounded-full">{{ $vendor->category }}</span>
                        </div>
                        @if($vendor->description)
                            <p class="text-white/80 text-sm line-clamp-2">{{ $vendor->description }}</p>
                        @endif
                    </div>

                    <!-- Contact Actions -->
                    <div class="flex flex-col gap-2 w-full md:w-auto">
                        @if($vendor->phone_number)
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $vendor->phone_number) }}" target="_blank"
                               class="flex items-center justify-center gap-2 px-6 py-2.5 bg-green-500 hover:bg-green-600 text-white rounded-lg font-medium transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                WhatsApp
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Social Media Icons (Right Side) -->
        @if($vendor->instagram || $vendor->facebook || $vendor->tiktok)
            <div class="fixed right-0 top-1/2 -translate-y-1/2 z-50 hidden lg:block">
                <div class="flex flex-col gap-2">
                    @if($vendor->instagram)
                        <a href="https://instagram.com/{{ ltrim($vendor->instagram, '@') }}" 
                           target="_blank"
                           title="Follow us on Instagram"
                           class="group relative w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 hover:w-16 transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                            <!-- Tooltip -->
                            <span class="absolute right-full mr-2 px-3 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                Instagram
                            </span>
                        </a>
                    @endif
                    
                    @if($vendor->facebook)
                        <a href="{{ $vendor->facebook }}" 
                           target="_blank"
                           title="Follow us on Facebook"
                           class="group relative w-12 h-12 bg-blue-600 hover:w-16 transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <!-- Tooltip -->
                            <span class="absolute right-full mr-2 px-3 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                Facebook
                            </span>
                        </a>
                    @endif
                    
                    @if($vendor->tiktok)
                        <a href="https://tiktok.com/@{{ ltrim($vendor->tiktok, '@') }}" 
                           target="_blank"
                           title="Follow us on TikTok"
                           class="group relative w-12 h-12 bg-black hover:w-16 transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                            </svg>
                            <!-- Tooltip -->
                            <span class="absolute right-full mr-2 px-3 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                TikTok
                            </span>
                        </a>
                    @endif
                </div>
            </div>
        @endif

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 space-y-6">
            
            <!-- Portfolio Gallery - All Images -->
            @php
                $allPortfolioImages = $vendor->publishedPortfolios->flatMap(function($portfolio) {
                    return $portfolio->images->map(function($image) use ($portfolio) {
                        return [
                            'image_path' => $image->image_path,
                            'title' => $portfolio->title,
                            'description' => $portfolio->description,
                            'project_date' => $portfolio->project_date
                        ];
                    });
                });
            @endphp

            @if($allPortfolioImages->count() > 0)
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h2 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Portfolio Gallery
                        <span class="text-sm font-normal text-slate-500">({{ $allPortfolioImages->count() }} Foto)</span>
                    </h2>
                    
                    <!-- Image Slider -->
                    <div class="relative" x-data="{ current: 0, total: {{ $allPortfolioImages->count() }} }">
                        <div class="overflow-hidden rounded-xl">
                            <div class="flex transition-transform duration-500 ease-out" :style="`transform: translateX(-${current * 100}%)`">
                                @foreach($allPortfolioImages as $index => $item)
                                    <div class="w-full flex-shrink-0">
                                        <div class="aspect-video bg-slate-100 rounded-xl overflow-hidden">
                                            <img src="{{ asset('storage/' . $item['image_path']) }}" 
                                                 alt="{{ $item['title'] }}" 
                                                 class="w-full h-full object-cover">
                                        </div>
                                        <div class="mt-3 px-2">
                                            <h3 class="font-bold text-slate-800">{{ $item['title'] }}</h3>
                                            @if($item['description'])
                                                <p class="text-sm text-slate-600 line-clamp-2">{{ $item['description'] }}</p>
                                            @endif
                                            @if($item['project_date'])
                                                <p class="text-xs text-slate-400 mt-1">{{ \Carbon\Carbon::parse($item['project_date'])->format('F Y') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Controls -->
                        @if($allPortfolioImages->count() > 1)
                            <button @click="current = current > 0 ? current - 1 : total - 1" 
                                    class="absolute left-2 top-1/3 -translate-y-1/2 w-10 h-10 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition z-10">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            </button>
                            <button @click="current = current < total - 1 ? current + 1 : 0" 
                                    class="absolute right-2 top-1/3 -translate-y-1/2 w-10 h-10 bg-white/90 hover:bg-white rounded-full shadow-lg flex items-center justify-center transition z-10">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>
                            
                            <!-- Dots Indicator -->
                            <div class="flex justify-center gap-2 mt-4 flex-wrap">
                                @foreach($allPortfolioImages as $index => $item)
                                    <button @click="current = {{ $index }}" 
                                            :class="current === {{ $index }} ? 'bg-emerald-500 w-8' : 'bg-slate-300 w-2'" 
                                            class="h-2 rounded-full transition-all"
                                            :title="'{{ $item['title'] }}'"></button>
                                @endforeach
                            </div>

                            <!-- Counter -->
                            <div class="text-center mt-2">
                                <span class="text-sm text-slate-500">
                                    <span x-text="current + 1"></span> / <span x-text="total"></span>
                                </span>
                            </div>
                        @endif
                    </div>

                    <!-- Portfolio Grid Thumbnails (Optional - untuk quick navigation) -->
                    @if($allPortfolioImages->count() > 1)
                        <div class="mt-6 grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-2">
                            @foreach($allPortfolioImages->take(8) as $index => $item)
                                <button @click="current = {{ $index }}" 
                                        :class="current === {{ $index }} ? 'ring-2 ring-emerald-500' : 'opacity-60 hover:opacity-100'"
                                        class="aspect-square rounded-lg overflow-hidden transition">
                                    <img src="{{ asset('storage/' . $item['image_path']) }}" 
                                         alt="{{ $item['title'] }}" 
                                         class="w-full h-full object-cover">
                                </button>
                            @endforeach
                            @if($allPortfolioImages->count() > 8)
                                <div class="aspect-square rounded-lg bg-slate-100 flex items-center justify-center text-slate-500 text-xs font-medium">
                                    +{{ $allPortfolioImages->count() - 8 }}
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            @endif

            <!-- 2 Column Layout for Services & Packages -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Services -->
                @if($vendor->products && $vendor->products->count() > 0)
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Layanan & Harga
                        </h2>
                        <div class="space-y-3">
                            @foreach($vendor->products->take(6) as $product)
                                <div class="p-4 bg-slate-50 rounded-xl hover:bg-slate-100 transition">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-bold text-slate-800">{{ $product->name }}</h3>
                                        <span class="text-emerald-600 font-bold text-sm whitespace-nowrap ml-2">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </span>
                                    </div>
                                    <span class="text-xs text-slate-500 bg-white px-2 py-0.5 rounded-full">{{ $product->category }}</span>
                                    @if($product->description)
                                        <p class="text-sm text-slate-600 mt-2 line-clamp-2">{{ $product->description }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Packages -->
                @if($vendor->packages()->where('is_visible', true)->count() > 0)
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                            Paket Layanan
                        </h2>
                        <div class="space-y-4">
                            @foreach($vendor->packages()->where('is_visible', true)->get()->take(3) as $package)
                                <div class="border border-slate-200 rounded-xl overflow-hidden hover:shadow-md transition">
                                    @if($package->thumbnail_path)
                                        <div class="aspect-video bg-gradient-to-br from-indigo-500 to-purple-600 relative">
                                            <img src="{{ asset('storage/' . $package->thumbnail_path) }}" alt="{{ $package->name }}" class="w-full h-full object-cover">
                                            @if($package->savings > 0)
                                                <span class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white text-xs font-bold rounded-full">
                                                    Hemat {{ $package->savings_percentage }}%
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="p-4">
                                        <h3 class="font-bold text-slate-800 mb-1">{{ $package->name }}</h3>
                                        <p class="text-xs text-slate-500 mb-2">{{ $package->services->count() }} Layanan</p>
                                        <div class="flex items-baseline justify-between">
                                            <span class="text-lg font-bold text-emerald-600">Rp {{ number_format($package->price, 0, ',', '.') }}</span>
                                            @if($package->individual_price > $package->price)
                                                <span class="text-xs text-slate-400 line-through">Rp {{ number_format($package->individual_price, 0, ',', '.') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Catalog / Inventory Section -->
            @if($vendor->catalogCategories->count() > 0 || $vendor->catalogItems->count() > 0)
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h2 class="text-xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        Katalog Produk
                    </h2>

                    @if($vendor->catalogCategories->count() > 0)
                        <!-- Group by Category -->
                        @foreach($vendor->catalogCategories as $category)
                            @if($category->items->count() > 0)
                                <div class="mb-6 last:mb-0">
                                    <h3 class="text-lg font-semibold text-slate-700 mb-3 pl-3 border-l-4 border-emerald-500">
                                        {{ $category->name }}
                                    </h3>
                                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                        @foreach($category->items as $item)
                                            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden hover:shadow-md transition group">
                                                <!-- Image -->
                                                <div class="aspect-square bg-slate-100 relative overflow-hidden">
                                                    @if($item->coverImage)
                                                        <img src="{{ asset('storage/' . $item->coverImage->image_path) }}" 
                                                             alt="{{ $item->name }}" 
                                                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                                    @else
                                                        <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                    
                                                    <!-- Status Badge -->
                                                    <div class="absolute top-2 right-2">
                                                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->status === 'available' ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                                            {{ $item->status === 'available' ? 'Tersedia' : 'Tidak Tersedia' }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <!-- Info -->
                                                <div class="p-3">
                                                    <h4 class="font-bold text-slate-800 text-sm mb-1 line-clamp-1">{{ $item->name }}</h4>
                                                    @if($item->price)
                                                        <p class="text-emerald-600 font-bold text-sm">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                                    @endif
                                                    @if($item->show_stock && $item->quantity !== null)
                                                        <p class="text-xs text-slate-500 mt-1">Stok: {{ $item->quantity }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <!-- Uncategorized Items -->
                        @if($vendor->catalogItems->count() > 0)
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                @foreach($vendor->catalogItems as $item)
                                    <div class="bg-white border border-slate-200 rounded-xl overflow-hidden hover:shadow-md transition group">
                                        <!-- Image -->
                                        <div class="aspect-square bg-slate-100 relative overflow-hidden">
                                            @if($item->coverImage)
                                                <img src="{{ asset('storage/' . $item->coverImage->image_path) }}" 
                                                     alt="{{ $item->name }}" 
                                                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                    </svg>
                                                </div>
                                            @endif
                                            
                                            <!-- Status Badge -->
                                            <div class="absolute top-2 right-2">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->status === 'available' ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                                    {{ $item->status === 'available' ? 'Tersedia' : 'Tidak Tersedia' }}
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Info -->
                                        <div class="p-3">
                                            <h4 class="font-bold text-slate-800 text-sm mb-1 line-clamp-1">{{ $item->name }}</h4>
                                            @if($item->price)
                                                <p class="text-emerald-600 font-bold text-sm">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                            @endif
                                            @if($vendor->show_stock_on_profile && $item->quantity !== null)
                                                <p class="text-xs text-slate-500 mt-1">Stok: {{ $item->quantity }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endif
                </div>
            @endif

            <!-- Contact Info - Compact -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h2 class="text-xl font-bold text-slate-800 mb-4">Informasi Kontak</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @if($vendor->phone_number)
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="text-sm text-slate-500">Telepon</p>
                                <p class="font-medium text-slate-800">{{ $vendor->phone_number }}</p>
                            </div>
                        </div>
                    @endif
                    
                    @if($vendor->email)
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="text-sm text-slate-500">Email</p>
                                <p class="font-medium text-slate-800">{{ $vendor->email }}</p>
                            </div>
                        </div>
                    @endif
                    
                    @if($vendor->address)
                        <div class="flex items-start gap-3 md:col-span-2">
                            <svg class="w-5 h-5 text-emerald-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div>
                                <p class="text-sm text-slate-500">Alamat</p>
                                <p class="font-medium text-slate-800">{{ $vendor->address }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <script>
        // Auto-play portfolio slider
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = document.querySelectorAll('[x-data]');
            sliders.forEach(slider => {
                if (slider.getAttribute('x-data').includes('current')) {
                    setInterval(() => {
                        const event = new CustomEvent('slider-next');
                        slider.dispatchEvent(event);
                    }, 5000);
                }
            });
        });
    </script>
</x-guest-layout>

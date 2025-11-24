<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-[#1A1A1A] leading-tight">
            {{ __('Tambah Produk ke Katalog') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <form action="{{ route('vendor.catalog.items.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-[#1A1A1A] mb-4">Informasi Produk</h3>
                    
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Basic Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-[#1A1A1A] mb-2">Nama Produk <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                       class="w-full px-4 py-2 border border-[#E0E0E0] rounded-lg focus:ring-2 focus:ring-[#27AE60] focus:border-transparent">
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1A1A1A] mb-2">Kategori</label>
                                <select name="category_id" class="w-full px-4 py-2 border border-[#E0E0E0] rounded-lg focus:ring-2 focus:ring-[#27AE60] focus:border-transparent">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="text-xs text-gray-500 mt-1">
                                    Belum ada kategori? <a href="{{ route('vendor.catalog.categories.index') }}" class="text-blue-600 hover:underline">Buat baru</a>
                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1A1A1A] mb-2">Status <span class="text-red-500">*</span></label>
                                <select name="status" required class="w-full px-4 py-2 border border-[#E0E0E0] rounded-lg focus:ring-2 focus:ring-[#27AE60] focus:border-transparent">
                                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available (Tersedia)</option>
                                    <option value="booked" {{ old('status') == 'booked' ? 'selected' : '' }}>Booked (Dipesan)</option>
                                    <option value="not_available" {{ old('status') == 'not_available' ? 'selected' : '' }}>Not Available (Tidak Tersedia)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#1A1A1A] mb-2">Harga (Rp) <span class="text-red-500">*</span></label>
                                <input type="number" name="price" value="{{ old('price', 0) }}" required min="0"
                                       class="w-full px-4 py-2 border border-[#E0E0E0] rounded-lg focus:ring-2 focus:ring-[#27AE60] focus:border-transparent">
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Dynamic Attributes -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-[#1A1A1A]">Atribut Tambahan (Opsional)</h3>
                        <button type="button" onclick="addAttribute()" class="text-sm text-[#012A4A] font-medium hover:underline">
                            + Tambah Atribut
                        </button>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Tambahkan detail spesifik seperti Warna, Ukuran, Bahan, Menu, dll.</p>
                    
                    <div id="attributes-container" class="space-y-3">
                        <!-- Attributes will be added here -->
                    </div>
                </div>

<div class="flex items-center gap-3 mt-4">
    <input type="checkbox"
           name="show_stock"
           id="show_stock"
           value="1"
           {{ old('show_stock') ? 'checked' : '' }}
           class="rounded border-[#E0E0E0] text-[#27AE60] focus:ring-[#27AE60] h-5 w-5">
    <label for="show_stock" class="text-sm font-medium text-[#1A1A1A]">
        Tampilkan jumlah stok katalog di profil publik
    </label>
</div>
<p class="text-xs text-gray-500 mt-1">
    Jika dicentang, pengunjung dapat melihat stok produk.
</p>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('vendor.catalog.items.index') }}" class="px-6 py-3 bg-gray-100 text-[#1A1A1A] rounded-lg font-medium hover:bg-gray-200 transition">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-3 bg-[#012A4A] text-white rounded-lg font-medium hover:bg-[#013d70] transition">
                        Simpan Produk
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        function addAttribute() {
            const container = document.getElementById('attributes-container');
            const div = document.createElement('div');
            div.className = 'flex gap-3 items-start';
            div.innerHTML = `
                <div class="flex-1">
                    <input type="text" name="attributes_keys[]" placeholder="Nama Atribut (Contoh: Warna)" 
                           class="w-full px-3 py-2 border border-[#E0E0E0] rounded-lg text-sm focus:ring-1 focus:ring-[#27AE60]">
                </div>
                <div class="flex-1">
                    <input type="text" name="attributes_values[]" placeholder="Nilai (Contoh: Merah Maroon)" 
                           class="w-full px-3 py-2 border border-[#E0E0E0] rounded-lg text-sm focus:ring-1 focus:ring-[#27AE60]">
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700 p-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            `;
            container.appendChild(div);
        }
    </script>
    @endpush
</x-app-layout>

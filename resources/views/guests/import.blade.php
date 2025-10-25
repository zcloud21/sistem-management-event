<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Import Tamu (Excel) untuk: {{ $event->event_name }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          {{-- Tampilkan pesan error jika ada --}}
          @if (session('error'))
          <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            {{ session('error') }}
          </div>
          @endif

          <div classs="mb-4 p-4 bg-blue-100 dark:bg-blue-900 border border-blue-300 dark:border-blue-700 rounded">
            <p class="font-bold">Instruksi:</p>
            <p>1. Siapkan file Excel (.xls atau .xlsx).</p>
            <p>2. Pastikan baris pertama (header) berisi: <strong>nama</strong> dan <strong>whatsapp_number</strong>.</p>
            <p>3. (Contoh: 'nama' di kolom A1, 'whatsapp_number' di kolom B1).</p>
          </div>

          {{-- Form WAJIB pakai enctype --}}
          <form action="{{ route('events.guests.import', $event) }}" method="POST" enctype="multipart/form-data" class="mt-6">
            @csrf
            <div class="mb-4">
              <x-input-label for="guest_file" :value="__('Pilih File Excel')" />
              <input id="guest_file" name="guest_file" type="file" class="block mt-1 w-full text-gray-900 dark:text-gray-100" required accept=".xls,.xlsx" />
              <x-input-error :messages="$errors->get('guest_file')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
              Import Tamu
            </x-primary-button>
            <x-secondary-button tag="a" :href="route('events.show', $event)" class="ml-2">
              Batal
            </x-secondary-button>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
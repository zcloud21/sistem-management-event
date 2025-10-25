<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Tambah Tamu untuk Event: {{ $event->event_name }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          @if ($errors->any())
          <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('events.guests.store', $event) }}" method="POST">
            @csrf
            <div class="mb-4">
              <x-input-label for="name" :value="__('Nama Tamu')" />
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div class="mb-4">
              <x-input-label for="whatsapp_number" :value="__('Nomor WhatsApp')" />
              <x-text-input id="whatsapp_number" class="block mt-1 w-full" type="text" name="whatsapp_number" :value="old('whatsapp_number', $guest->whatsapp_number ?? '')" required placeholder="contoh: 081234567890" />
            </div>

            <x-primary-button type="submit">
              Simpan Tamu
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
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Edit Tamu: {{ $guest->name }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <form action="{{ route('events.guests.update', [$event, $guest]) }}" method="POST">
            @csrf
            @method('PUT') {{-- Method PUT untuk update --}}

            <div class="mb-4">
              <x-input-label for="name" :value="__('Nama Tamu')" />
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $guest->name)" required autofocus />
            </div>
            <div class="mb-4">
              <x-input-label for="whatsapp_number" :value="__('Whatsapp')" />
              <x-text-input id="whatsapp_number" class="block mt-1 w-full" type="text" name="whatsapp_number" :value="old('whatsapp_number', $guest->whatsapp_number)" required />
            </div>

            <x-primary-button type="submit">
              Update Tamu
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
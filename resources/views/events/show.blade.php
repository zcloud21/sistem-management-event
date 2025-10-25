<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Detail Event: {{ $event->event_name }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold">Info Event</h3>
          <p>Venue: {{ $event->venue->name ?? 'N/A' }}</p>
          <p>Kapan: {{ $event->start_time }}</p>
        </div>
      </div>

      {{-- DAFTAR TAMU --}}
      <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Daftar Tamu</h3>
            <x-primary-button tag="a" :href="route('events.guests.create', $event)">
              + Tambah Tamu
            </x-primary-button>
            <x-secondary-button tag="a" :href="route('events.guests.import.form', $event)" class="ml-2">
              Import Excel
            </x-secondary-button>
          </div>

          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Whatsapp</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($event->guests as $guest)
              <tr>
                <td class="px-6 py-4">{{ $guest->name }}</td>
                <td class="px-6 py-4">{{ $guest->whatsapp_number }}</td>
                <td class="px-6 py-4">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $guest->status == 'Attended' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $guest->status }}
                  </span>
                </td>
                <td class="px-6 py-4 text-right">
                  {{-- Link Tiket --}}
                  @if ($guest->ticket)
                  {{-- Jika tiket ADA, tampilkan tombol --}}
                  <x-secondary-button tag="a" :href="route('tickets.show', $guest->ticket->ticket_code)" target="_blank">
                    Tiket
                  </x-secondary-button>
                  @else
                  {{-- Jika tiket TIDAK ADA, tampilkan tombol non-aktif --}}
                  <x-secondary-button disabled title="Tiket gagal dibuat untuk tamu ini">
                    Tiket Error
                  </x-secondary-button>
                  @endif
                  {{-- Edit Guest --}}
                  <x-secondary-button tag="a" :href="route('events.guests.edit', [$event, $guest])" class="ml-2">
                    Edit
                  </x-secondary-button>
                  {{-- Hapus Guest --}}
                  <form action="{{ route('events.guests.destroy', [$event, $guest]) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <x-danger-button type="submit" onclick="return confirm('Yakin hapus tamu ini?')">
                      Hapus
                    </x-danger-button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="px-6 py-4 text-center">Belum ada tamu.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
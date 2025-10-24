<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Manajemen Event') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <x-primary-button tag="a" :href="route('events.create')">
            Buat Event Baru
          </x-primary-button>

          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 mt-6">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Nama Event</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Venue</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Waktu Mulai</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Pembuat</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($events as $event)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->event_name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->venue->name ?? 'N/A' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->start_time }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->user->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <x-secondary-button tag="a" :href="route('events.edit', $event->id)">
                    Edit
                  </x-secondary-button>
                  <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <x-danger-button type="submit" onclick="return confirm('Yakin ingin menghapus event ini?')">
                      Delete
                    </x-danger-button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center">Belum ada data event.</td>
              </tr>
              @endforelse
            </tbody>
          </table>

          {{-- Link Paginasi --}}
          <div class="mt-4">
            {{ $events->links() }}
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
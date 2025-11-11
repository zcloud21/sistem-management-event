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
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Klien</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Venue</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Waktu Mulai</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Pembuat</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($events as $event)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('events.show', $event->id) }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-200 font-medium">{{ $event->event_name }}</a></td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->client_name ?? 'N/A' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->venue->name ?? 'N/A' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->start_time }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $event->user->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <!-- Edit button (now a direct link) -->
                  <a href="{{ route('events.edit', $event->id) }}"
                    class="inline-flex items-center px-3 py-1.5 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150"
                  >
                    Edit
                  </a>

                  <!-- Delete button with global modal confirmation -->
                  <button 
                    @click="window.dispatchEvent(new CustomEvent('open-confirmation-data', {
                        detail: {
                            formId: 'delete-form-{{ $event->id }}',
                            title: 'Konfirmasi Hapus Event',
                            message: 'Apakah Anda yakin ingin menghapus event {{ $event->event_name }}? Tindakan ini tidak dapat dibatalkan.'
                        }
                    }))"
                    class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 inline-block ml-2"
                  >
                    Delete
                  </button>

                  <!-- Hidden form for delete action -->
                  <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">Belum ada data event.</td>
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
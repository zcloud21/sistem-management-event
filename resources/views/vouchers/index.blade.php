{{-- resources/views/vouchers/index.blade.php --}}
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Manajemen Voucher') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          {{-- Tombol Tambah --}}
          <x-primary-button tag="a" :href="route('vouchers.create')">
            Buat Voucher Baru
          </x-primary-button>

          {{-- Pesan Sukses --}}
          @if (session('success'))
          <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
          </div>
          @endif

          {{-- Tabel Data --}}
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 mt-6">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kode</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tipe</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Value</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kadaluarsa</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($vouchers as $voucher)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap font-mono">{{ $voucher->code }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $voucher->type }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if ($voucher->type == 'percentage')
                  {{ $voucher->value }}%
                  @else
                  Rp {{ number_format($voucher->value, 0, ',', '.') }}
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $voucher->expires_at ?? 'Selamanya' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if ($voucher->status == 'active')
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Aktif
                  </span>
                  @else
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Tidak Aktif
                  </span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  {{-- Edit button (now a direct link) --}}
                  <a href="{{ route('vouchers.edit', $voucher->id) }}"
                    class="inline-flex items-center px-3 py-1.5 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                    Edit
                  </a>

                  {{-- Tombol Hapus dengan konfirmasi modal global --}}
                  <button
                    type="button"
                    @click="window.dispatchEvent(new CustomEvent('open-confirmation-data', {
                        detail: {
                            formId: 'delete-form-voucher-{{ $voucher->id }}',
                            title: 'Konfirmasi Hapus Voucher',
                            message: 'Apakah Anda yakin ingin menghapus voucher {{ $voucher->code }}? Tindakan ini tidak dapat dibatalkan.'
                        }
                    }))"
                    class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 inline-block ml-2">
                    Delete
                  </button>

                  {{-- Form tersembunyi untuk aksi hapus --}}
                  <form id="delete-form-voucher-{{ $voucher->id }}" action="{{ route('vouchers.destroy', $voucher->id) }}" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center">Belum ada data voucher.</td>
              </tr>
              @endforelse
            </tbody>
          </table>

          {{-- Paginasi --}}
          <div class="mt-4">
            {{ $vouchers->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
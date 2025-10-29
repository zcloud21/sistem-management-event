<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Manajemen Vendor') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <x-primary-button tag="a" :href="route('vendors.create')">
            Tambah Vendor Baru
          </x-primary-button>

          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 mt-6">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left ...">Nama</th>
                <th class="px-6 py-3 text-left ...">Kategori</th>
                <th class="px-6 py-3 text-left ...">Kontak Person</th>
                <th class="px-6 py-3 text-left ...">No. Telepon</th>
                <th class="px-6 py-3 text-right ...">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($vendors as $vendor)
              <tr>
                <td class="px-6 py-4">{{ $vendor->name }}</td>
                <td class="px-6 py-4">{{ $vendor->category }}</td>
                <td class="px-6 py-4">{{ $vendor->contact_person }}</td>
                <td class="px-6 py-4">{{ $vendor->phone_number }}</td>
                <td class="px-6 py-4 text-right">
                  <x-secondary-button tag="a" :href="route('vendors.edit', $vendor->id)">
                    Edit
                  </x-secondary-button>
                  <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <x-danger-button type="submit" onclick="return confirm('Yakin ingin menghapus vendor ini?')">
                      Delete
                    </x-danger-button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="px-6 py-4 text-center">Belum ada data vendor rekanan.</td>
              </tr>
              @endforelse
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Invoice: {{ $invoice->invoice_number }}
        </h2>

        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <div>Export</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('invoices.export', ['invoice' => $invoice, 'format' => 'pdf'])">
                    {{ __('Export to PDF') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('invoices.export', ['invoice' => $invoice, 'format' => 'xls'])">
                    {{ __('Export to XLS') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('invoices.export', ['invoice' => $invoice, 'format' => 'docx'])">
                    {{ __('Export to Word') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
</x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

      {{-- 1. RINGKASAN INVOICE --}}
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold mb-4">Ringkasan Tagihan</h3>
          <div class="grid grid-cols-4 gap-4">
            <div>
              <p class="text-sm text-gray-500">Total Tagihan Awal</p>
              <p class="text-2xl font-bold">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</p>
            </div>
            <div>
              <p class="text-sm text-gray-500">Diskon (Voucher)</p>
              <p class="text-2xl font-bold text-yellow-500">- Rp {{ number_format($invoice->voucher_discount_amount ?? 0, 0, ',', '.') }}</p>
            </div>
            <div>
              <p class="text-sm text-gray-500">Telah Dibayar</p>
              <p class="text-2xl font-bold text-green-600">Rp {{ number_format($invoice->paid_amount, 0, ',', '.') }}</p>
            </div>
            <div>
              <p class="text-sm text-gray-500">Sisa Tagihan</p>
              <p class="text-2xl font-bold text-red-600">Rp {{ number_format($invoice->balance_due, 0, ',', '.') }}</p>
            </div>
          </div>
          <hr class="my-4 dark:border-gray-700">
          <p><strong>Event:</strong> {{ $invoice->event->event_name }}</p>
          <p><strong>Status:</strong> <span class="font-bold {{ $invoice->status == 'Paid' ? 'text-green-600' : 'text-yellow-600' }}">{{ $invoice->status }}</span></p>
          <p><strong>Jatuh Tempo:</strong> {{ $invoice->due_date }}</p>
        </div>
      </div>

      {{-- Menampilkan error atau pesan sukses --}}
      @if (session('error'))
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
      </div>
      @endif

      @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
      @endif

      {{-- Pesan jika voucher dibatalkan - hanya muncul sesaat setelah pembatalan --}}
      @if (session('success') && str_contains(session('success'), 'Voucher berhasil dibatalkan'))
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Pemberitahuan:</strong>
        <span class="block sm:inline">Voucher yang sebelumnya diterapkan pada faktur ini telah dibatalkan.</span>
        <p class="text-sm mt-1">Alasan: "{{ $invoice->voucher_invalidation_reason }}" pada {{ $invoice->voucher_invalidated_at->format('d M Y H:i') }}.</p>
        <p class="text-sm mt-1">Total tagihan Anda telah disesuaikan.</p>
      </div>
      @endif

      {{-- Debug info --}}
      <!-- 
      Debug: voucher_id={{ $invoice->voucher_id ?? 'null' }}, 
      voucher_invalidated_at={{ $invoice->voucher_invalidated_at ? 'not null' : 'null' }},
      voucher_discount_amount={{ $invoice->voucher_discount_amount ?? 0 }}
      -->

      @if ($invoice->voucher_id && !$invoice->voucher_invalidated_at)
      {{-- Jika sudah ada voucher dan belum dibatalkan --}}
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold mb-4">Detail Voucher Diterapkan</h3>
          <p class="text-green-600 font-medium">
            Voucher <strong>{{ $invoice->voucher ? $invoice->voucher->code : 'Tidak diketahui' }}</strong> telah diterapkan.
            (Diskon Rp {{ number_format($invoice->voucher_discount_amount, 0, ',', '.') }})
          </p>
          @if($invoice->voucher)
          <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
            Tipe: {{ $invoice->voucher->type == 'fixed' ? 'Potongan Tetap' : 'Persentase' }} ({{ $invoice->voucher->value }}{{ $invoice->voucher->type == 'percentage' ? '%' : '' }})
          </p>
          @endif
          
          {{-- Tombol Batalkan Voucher --}}
          <div class="mt-4">
            <button
              type="button"
              @click="window.dispatchEvent(new CustomEvent('open-confirmation-data', {
                  detail: {
                      formId: 'invalidate-voucher-form-{{ $invoice->id }}',
                      title: 'Batalkan Voucher',
                      message: 'Apakah Anda yakin ingin membatalkan voucher ini dari faktur? Tindakan ini akan menghapus diskon dan mungkin mengubah status pembayaran faktur.',
                      needsReason: true,
                      reasonLabel: 'Alasan Pembatalan',
                      reasonPlaceholder: 'Cth: Voucher tidak valid, kesalahan input, dll.',
                      reasonFieldName: 'invalidation_reason'
                  }
              }))"
              class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
              Batalkan Voucher
            </button>
          </div>

          {{-- Form tersembunyi untuk aksi pembatalan voucher --}}
          <form id="invalidate-voucher-form-{{ $invoice->id }}" action="{{ route('invoice.invalidateVoucher', $invoice) }}" method="POST" class="hidden needs-confirmation">
            @csrf
            <input type="hidden" name="invalidation_reason" id="invalidation_reason" value="">
          </form>
        </div>
      </div>
      @elseif($invoice->voucher_invalidated_at)
      {{-- Jika voucher pernah diterapkan tetapi sudah dibatalkan - tampilkan form voucher kembali --}}
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold mb-4">Masukkan Kode Voucher Baru</h3>
          <form id="apply-voucher-form-{{ $invoice->id }}" action="{{ route('invoice.applyVoucher', $invoice) }}" method="POST" class="needs-confirmation" data-confirmation-title="Terapkan Voucher" data-confirmation-message="Apakah Anda yakin ingin menerapkan voucher ini ke faktur?">
            @csrf
            <div class="flex items-center gap-2">
              <x-text-input id="voucher_code" class="block mt-1 w-full" type="text" name="voucher_code" placeholder="Masukkan kode voucher..." required />
              <x-primary-button type="submit">
                Terapkan
              </x-primary-button>
            </div>
            @if ($errors->has('voucher_code'))
            <x-input-error :messages="$errors->get('voucher_code')" class="mt-2" />
            @endif
          </form>
        </div>
      </div>
      @else
      {{-- Jika belum ada voucher sama sekali --}}
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold mb-4">Punya Kode Voucher?</h3>
          <form id="apply-voucher-form-{{ $invoice->id }}" action="{{ route('invoice.applyVoucher', $invoice) }}" method="POST" class="needs-confirmation" data-confirmation-title="Terapkan Voucher" data-confirmation-message="Apakah Anda yakin ingin menerapkan voucher ini ke faktur?">
            @csrf
            <div class="flex items-center gap-2">
              <x-text-input id="voucher_code" class="block mt-1 w-full" type="text" name="voucher_code" placeholder="Masukkan kode..." required />
              <x-primary-button type="submit">
                Terapkan
              </x-primary-button>
            </div>
            @if ($errors->has('voucher_code'))
            <x-input-error :messages="$errors->get('voucher_code')" class="mt-2" />
            @endif
          </form>
        </div>
      </div>
      @endif

      {{-- 2. FORM CATAT PEMBAYARAN --}}
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold mb-4">Catat Pembayaran Baru</h3>

          <form id="store-payment-form-{{ $invoice->id }}" action="{{ route('payments.store', $invoice) }}" method="POST" class="needs-confirmation" data-confirmation-title="Konfirmasi Pembayaran" data-confirmation-message="Apakah Anda yakin ingin menyimpan pembayaran ini?">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
              <div>
                <x-input-label for="amount" :value="__('Jumlah (Rp)')" />
                <x-text-input id="amount" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="number" name="amount" :value="old('amount')" required />
              </div>
              <div>
                <x-input-label for="payment_date" :value="__('Tanggal Bayar')" />
                <x-text-input id="payment_date" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="date" name="payment_date" :value="today()->toDateString()" required />
              </div>
              <div>
                <x-input-label for="payment_method" :value="__('Metode Bayar')" />
                <select name="payment_method" id="payment_method" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                  <option>Bank Transfer</option>
                  <option>Cash</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>
            <div class="mt-4">
              <x-input-label for="notes" :value="__('Catatan (Cth: DP 30%)')" />
              <x-text-input id="notes" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="notes" :value="old('notes')" />
            </div>
            <x-primary-button type="submit" class="mt-4">
              Simpan Pembayaran
            </x-primary-button>
          </form>
        </div>
      </div>

      {{-- 3. RIWAYAT PEMBAYARAN --}}
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-lg font-bold mb-4">Riwayat Pembayaran</h3>
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left ...">Tanggal</th>
                <th class="px-6 py-3 text-left ...">Jumlah</th>
                <th class="px-6 py-3 text-left ...">Metode</th>
                <th class="px-6 py-3 text-left ...">Catatan</th>
                <th class="px-6 py-3 text-right ...">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($invoice->payments->sortByDesc('payment_date') as $payment)
              <tr>
                <td class="px-6 py-4">{{ $payment->payment_date }}</td>
                <td class="px-6 py-4">Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                <td class="px-6 py-4">{{ $payment->payment_method }}</td>
                <td class="px-6 py-4">{{ $payment->notes }}</td>
                <td class="px-6 py-4 text-right">
                  {{-- Tombol Hapus dengan konfirmasi modal global --}}
                  <button
                    type="button"
                    @click="window.dispatchEvent(new CustomEvent('open-confirmation-data', {
                        detail: {
                            formId: 'delete-form-payment-{{ $payment->id }}',
                            title: 'Konfirmasi Hapus Pembayaran',
                            message: 'Apakah Anda yakin ingin menghapus catatan pembayaran ini? Tindakan ini tidak dapat dibatalkan.'
                        }
                    }))"
                    class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 inline-block">
                    Hapus
                  </button>

                  {{-- Form tersembunyi untuk aksi hapus --}}
                  <form id="delete-form-payment-{{ $payment->id }}" action="{{ route('payments.destroy', $payment) }}" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="px-6 py-4 text-center">Belum ada catatan pembayaran.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</x-app-layout>
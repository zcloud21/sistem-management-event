<div style="font-family: Arial, sans-serif; padding: 20px;">
    <!-- Header -->
    <table style="width: 100%; border-collapse: collapse; text-align: center;">
        <tr>
            <td style="padding: 20px 0;">
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBmaWxsPSJsaWdodGdyZXkiLz4KPHRleHQgeD0iMzAiIHk9IjMwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiIGZpbGw9ImJsYWNrIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0iY2VudHJhbCI+TE9HTzwvdGV4dD4KPC9zdmc+" alt="Logo Placeholder" style="width: 60px; height: 60px; margin-bottom: 10px;">
                    <div style="font-size: 18px; font-weight: bold; margin: 5px 0;">Nama Perusahaan Anda</div>
                    <div style="font-size: 24px; font-weight: bold; color: #333; text-transform: uppercase;">INVOICE</div>
                </div>
                <hr style="border: 1px solid #ccc; margin: 20px 0;">
            </td>
        </tr>
    </table>

    <!-- Info Section -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
        <tr>
            <td style="width: 50%; vertical-align: top;">
                <h3 style="border-bottom: 1px solid #333; padding-bottom: 5px; margin-bottom: 10px;">Informasi Perusahaan</h3>
                <p>Nama Perusahaan<br>
                    Phone:<br>
                    Email:<br>
                    Alamat:</p>
            </td>
            <td style="width: 50%; vertical-align: top;">
                <div style="margin-bottom: 20px;">
                    <h3 style="border-bottom: 1px solid #333; padding-bottom: 5px; margin-bottom: 10px;">Informasi Invoice</h3>
                    <p>Nomor Dokumen: {{ $invoice->invoice_number ?? 'N/A' }}<br>
                        Tanggal Invoice: {{ $invoice->created_at->format('d M Y') ?? 'N/A' }}<br>
                        Jatuh Tempo: {{ $invoice->due_date ?? 'N/A' }}</p>
                </div>
                <div>
                    <h3 style="border-bottom: 1px solid #333; padding-bottom: 5px; margin-bottom: 10px;">Detail Event</h3>
                    <p>Nama Event: {{ $invoice->event->name ?? 'N/A' }}<br>
                        Tanggal Event: {{ $invoice->event->date ?? 'N/A' }}<br>
                        Lokasi: {{ $invoice->event->location ?? 'N/A' }}</p>
                </div>
            </td>
        </tr>
    </table>

    <!-- Tabel Item -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead>
            <tr style="background-color: #f5f5f5;">
                <th style="border-top: 1px solid #333; border-bottom: 1px solid #333; padding: 10px; text-align: left;">Deskripsi</th>
                <th style="border-top: 1px solid #333; border-bottom: 1px solid #333; padding: 10px; text-align: right;">Jumlah</th>
                <th style="border-top: 1px solid #333; border-bottom: 1px solid #333; padding: 10px; text-align: right;">Harga Satuan</th>
                <th style="border-top: 1px solid #333; border-bottom: 1px solid #333; padding: 10px; text-align: right;">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-bottom: 1px solid #ddd; padding: 10px;">Registration Fee</td>
                <td style="border-bottom: 1px solid #ddd; padding: 10px; text-align: right;">1</td>
                <td style="border-bottom: 1px solid #ddd; padding: 10px; text-align: right;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
                <td style="border-bottom: 1px solid #ddd; padding: 10px; text-align: right;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Summary Section -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
        <tr>
            <td style="width: 50%; vertical-align: top;">
                <!-- Kolom kiri kosong untuk balance -->
            </td>
            <td style="width: 50%; vertical-align: top;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 5px 0;">Sub Total</td>
                        <td style="padding: 5px 0; text-align: right;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0;">Diskon</td>
                        <td style="padding: 5px 0; text-align: right;">Rp 0</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0;">PPn</td>
                        <td style="padding: 5px 0; text-align: right;">Rp 0</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; border-top: 2px solid #333; border-bottom: 2px solid #333; font-weight: bold; font-size: 16px;">Total</td>
                        <td style="padding: 10px 0; border-top: 2px solid #333; border-bottom: 2px solid #333; text-align: right; font-weight: bold; font-size: 16px;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0;">Uang Muka</td>
                        <td style="padding: 5px 0; text-align: right;">Rp 0</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0; font-weight: bold;">Sisa Pembayaran</td>
                        <td style="padding: 5px 0; text-align: right; font-weight: bold;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Notes Section -->
    <div style="border-left: 4px solid #333; padding-left: 15px; margin-bottom: 30px;">
        <h3>Ketentuan Pembayaran & Syarat Berlaku</h3>
        <p>Informasi Rekening Bank:</p>
        <ul style="margin-top: 5px;">
            <li>Bank: Bank Central Asia (BCA)</li>
            <li>No. Rekening: 1234567890</li>
            <li>Atas Nama: Nama Perusahaan</li>
        </ul>
        <p>Syarat dan ketentuan pembayaran:</p>
        <ul style="margin-top: 5px;">
            <li>Pembayaran harus dilakukan dalam waktu 7 hari sejak tanggal invoice</li>
            <li>Pembayaran terlambat akan dikenakan denda 2% per bulan</li>
            <li>Pembayaran hanya valid melalui transfer bank yang tercantum</li>
        </ul>
    </div>

    <!-- Signature Section -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
        <tr>
            <td style="width: 50%; text-align: center; padding: 10px;">
                <div style="margin-bottom: 50px;">
                    <div style="width: 80%; height: 1px; background-color: #333; margin: 0 auto;"></div>
                </div>
                <div>Pihak Perusahaan</div>
                <div>(_______________________)</div>
                <div>{{ now()->format('d M Y') }}</div>
            </td>
            <td style="width: 50%; text-align: center; padding: 10px;">
                <div style="margin-bottom: 50px;">
                    <div style="width: 80%; height: 1px; background-color: #333; margin: 0 auto;"></div>
                </div>
                <div>Klien</div>
                <div>({{ $invoice->user->name ?? '_______________________' }})</div>
                <div>{{ now()->format('d M Y') }}</div>
            </td>
        </tr>
    </table>

    <!-- Footer -->
    <div style="text-align: center; padding-top: 20px; border-top: 1px solid #ccc; font-size: 12px; color: #666;">
        <p>Dokumen ini merupakan invoice resmi dan telah dihasilkan secara otomatis. Mohon tidak mengubah isi dokumen ini.</p>
    </div>
</div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice #{{ $invoice->invoice_number ?? 'N/A' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .header img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }
        .header hr {
            border: 1px solid #ccc;
            margin: 20px 0;
        }
        .info-section table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .info-section h3 {
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .items-table thead tr {
            background-color: #f5f5f5;
        }
        .items-table th,
        .items-table td {
            padding: 10px;
        }
        .items-table th {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }
        .items-table td {
            border-bottom: 1px solid #ddd;
        }
        .items-table th:nth-child(2),
        .items-table th:nth-child(3),
        .items-table th:nth-child(4),
        .items-table td:nth-child(2),
        .items-table td:nth-child(3),
        .items-table td:nth-child(4) {
            text-align: right;
        }
        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .notes-section {
            border-left: 4px solid #333;
            padding-left: 15px;
            margin-bottom: 30px;
        }
        .signature-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .signature-table td {
            text-align: center;
            padding: 10px;
        }
        .signature-line {
            width: 80%;
            height: 1px;
            background-color: #333;
            margin: 0 auto;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ccc;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <table class="header">
        <tr>
            <td>
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBmaWxsPSJsaWdodGdyZXkiLz4KPHRleHQgeD0iMzAiIHk9IjMwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiIGZpbGw9ImJsYWNrIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkb21pbmFudC1iYXNlbGluZT0iY2VudHJhbCI+TE9HTzwvdGV4dD4KPC9zdmc+" alt="Logo Placeholder" style="width: 60px; height: 60px; margin-bottom: 10px;">
                    <div style="font-size: 18px; font-weight: bold; margin: 5px 0;">Nama Perusahaan Anda</div>
                    <div style="font-size: 24px; font-weight: bold; color: #333; text-transform: uppercase;">INVOICE</div>
                </div>
                <hr>
            </td>
        </tr>
    </table>

    <!-- Info Section -->
    <div class="info-section">
        <table>
            <tr>
                <td style="width: 50%; vertical-align: top;">
                    <h3>Informasi Perusahaan</h3>
                    <p>{{ e($companySettings->company_name ?? 'Nama Perusahaan') }}<br>
                       Phone: {{ e($companySettings->company_phone ?? 'Nomor telepon tidak tersedia') }}<br>
                       Email: {{ e($companySettings->company_email ?? 'Email tidak tersedia') }}<br>
                       Alamat: {{ e($companySettings->company_address ?? 'Alamat tidak tersedia') }}</p>
                </td>
                <td style="width: 50%; vertical-align: top;">
                    <h3>Bill To</h3>
                    <p>{{ e($invoice->event->client_name ?? $invoice->event->user->name ?? 'Pelanggan') }}<br>
                       Phone: {{ e($invoice->event->client_phone ?? $invoice->event->user->phone ?? 'Nomor telepon tidak tersedia') }}<br>
                       Email: {{ e($invoice->event->client_email ?? $invoice->event->user->email ?? 'Email tidak tersedia') }}<br>
                       Alamat: {{ e($invoice->event->client_address ?? $invoice->event->location ?? 'Alamat tidak tersedia') }}</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 20px;">
                    <div style="margin-bottom: 20px;">
                        <h3>Informasi Invoice</h3>
                        <p>Nomor Dokumen: {{ $invoice->invoice_number ?? 'N/A' }}<br>
                           Tanggal Invoice: {{ $invoice->created_at->format('d M Y') ?? 'N/A' }}<br>
                           Jatuh Tempo: {{ $invoice->due_date ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3>Detail Event</h3>
                        <p>Nama Event: {{ $invoice->event->event_name ?? 'N/A' }}<br>
                           Tanggal Event: {{ $invoice->event->start_time->format('d M Y') ?? 'N/A' }}<br>
                           Lokasi: {{ $invoice->event->venue->name ?? $invoice->event->location ?? 'N/A' }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Tabel Item -->
    <table class="items-table">
        <thead>
            <tr>
                <th style="text-align: left;">Deskripsi</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Biaya Pendaftaran Event: {{ $invoice->event->event_name ?? 'Event' }}</td>
                <td style="text-align: right;">1</td>
                <td style="text-align: right;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
                <td style="text-align: right;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Summary Section -->
    <table class="summary-table">
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
    <div class="notes-section">
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
    <table class="signature-table">
        <tr>
            <td style="width: 50%; text-align: center; padding: 10px;">
                <div style="margin-bottom: 50px;">
                    <div class="signature-line"></div>
                </div>
                <div>Pihak Perusahaan</div>
                <div>({{ config('app.name', 'Nama Perusahaan') }})</div>
                <div>{{ now()->format('d M Y') }}</div>
            </td>
            <td style="width: 50%; text-align: center; padding: 10px;">
                <div style="margin-bottom: 50px;">
                    <div class="signature-line"></div>
                </div>
                <div>Klien</div>
                <div>({{ e($invoice->event->client_name ?? $invoice->event->user->name ?? '_______________________') }})</div>
                <div>{{ now()->format('d M Y') }}</div>
            </td>
        </tr>
    </table>

    <!-- Footer -->
    <div class="footer">
        <p>Dokumen ini merupakan invoice resmi dan telah dihasilkan secara otomatis. Mohon tidak mengubah isi dokumen ini.</p>
    </div>
</body>
</html>
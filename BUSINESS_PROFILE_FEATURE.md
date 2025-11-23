# Fitur Business Profile untuk Vendor

## Deskripsi
Fitur ini memungkinkan vendor untuk mengelola profil bisnis mereka yang akan ditampilkan di website utama.

## Fitur yang Tersedia

### 1. Informasi Dasar
- **Nama Vendor / Brand**: Nama bisnis vendor
- **Jenis Vendor**: Kategori layanan (WO, MUA, Catering, Decor, dll)
- **Logo**: Upload logo vendor (max 2MB, format: JPG, PNG, GIF)
- **Deskripsi Singkat**: Penjelasan tentang bisnis vendor
- **Contact Person**: Nama penanggung jawab

### 2. Kontak
- **Nomor Telepon**: Nomor telepon utama
- **Email**: Alamat email bisnis
- **WhatsApp**: Nomor WhatsApp untuk kontak langsung

### 3. Lokasi
- **Alamat Lengkap**: Alamat detail bisnis
- **Kota/Kabupaten**: Lokasi operasional

### 4. Media Sosial
- **Instagram**: Username Instagram
- **TikTok**: Username TikTok
- **Facebook**: URL halaman Facebook

### 5. Jam Operasional
Pengaturan jam buka dan tutup untuk setiap hari dalam seminggu dengan opsi untuk menandai hari libur.

### 6. Pengaturan Tampilan
- **Status Aktif**: Toggle untuk menampilkan/menyembunyikan profil di website utama

## Cara Menggunakan

### Untuk Vendor:
1. Login dengan akun yang memiliki role **Vendor**
2. Klik menu **Business Profile** di sidebar
3. Isi semua informasi yang diperlukan
4. Upload logo (opsional)
5. Atur jam operasional
6. Centang "Tampilkan profil saya di website utama" untuk mengaktifkan
7. Klik **Simpan Perubahan**

### Untuk Pengunjung Website:
1. Kunjungi halaman utama website
2. Lihat daftar vendor yang tersedia
3. Klik pada vendor untuk melihat profil lengkap
4. Hubungi vendor melalui WhatsApp atau kontak lainnya

## File yang Dibuat/Dimodifikasi

### Migration
- `database/migrations/2025_11_24_004710_add_business_profile_fields_to_vendors_table.php`

### Model
- `app/Models/Vendor.php` (updated)

### Controller
- `app/Http/Controllers/VendorBusinessProfileController.php`

### Views
- `resources/views/vendor/business-profile/edit.blade.php` - Form edit profil
- `resources/views/vendor/business-profile/show.blade.php` - Tampilan publik profil

### Routes
- `GET /vendor/business-profile` - Edit profil (auth, role:Vendor)
- `PUT /vendor/business-profile` - Update profil (auth, role:Vendor)
- `GET /vendor/{id}/profile` - Lihat profil publik (public)

### Navigation
- Menambahkan menu "Business Profile" di sidebar untuk role Vendor

## Struktur Database

Kolom baru yang ditambahkan ke tabel `vendors`:

```sql
brand_name VARCHAR(255) NULL
logo_path VARCHAR(255) NULL
description TEXT NULL
email VARCHAR(255) NULL
whatsapp VARCHAR(20) NULL
location VARCHAR(255) NULL
instagram VARCHAR(255) NULL
tiktok VARCHAR(255) NULL
facebook VARCHAR(255) NULL
operating_hours JSON NULL
is_active BOOLEAN DEFAULT TRUE
```

## Validasi

### Field Wajib:
- Nama Vendor / Brand
- Jenis Vendor
- Nama Kontak Person
- Nomor Telepon

### Field Opsional:
- Semua field lainnya

### Validasi File:
- Logo: max 2MB, format: jpeg, png, jpg, gif

## Keamanan
- Hanya user dengan role **Vendor** yang dapat mengakses halaman edit
- Vendor hanya dapat mengedit profil mereka sendiri
- Profil publik hanya menampilkan vendor dengan status `is_active = true`

## Catatan Teknis
- Operating hours disimpan dalam format JSON
- Logo disimpan di `storage/app/public/vendor-logos/`
- Pastikan symbolic link sudah dibuat: `php artisan storage:link`

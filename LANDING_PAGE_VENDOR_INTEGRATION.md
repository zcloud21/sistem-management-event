# Integrasi Business Profile dengan Landing Page

## Overview
Vendor yang telah mengisi Business Profile akan otomatis ditampilkan di Landing Page dengan desain card yang modern dan menarik.

## Cara Kerja

### 1. **Filter Vendor Aktif**
Hanya vendor dengan `is_active = true` yang akan ditampilkan di landing page.

### 2. **Prioritas Tampilan**
Vendor dengan Business Profile lengkap (memiliki `brand_name` dan `logo_path`) akan diprioritaskan untuk ditampilkan lebih dulu.

### 3. **Informasi yang Ditampilkan**

#### Card Vendor Menampilkan:
- ✅ **Logo Vendor** - Jika tersedia, ditampilkan dengan background gradient
- ✅ **Brand Name** - Nama bisnis vendor
- ✅ **Category Badge** - Jenis layanan dengan badge hijau (#27AE60)
- ✅ **Location** - Kota/Kabupaten dengan icon lokasi
- ✅ **Description** - Deskripsi singkat (max 2 baris)
- ✅ **Social Media Icons** - Instagram, TikTok, WhatsApp (jika tersedia)
- ✅ **Button "Lihat Profil"** - Link ke halaman profil lengkap vendor

## Desain Card

### Style yang Digunakan:
```
- Layout: Grid responsive (4 kolom di desktop, 2 di tablet, 1 di mobile)
- Card: Rounded 2xl dengan shadow-md
- Header: Gradient background (#012A4A to #013d70) dengan tinggi 192px
- Logo: Object-contain dengan padding 24px
- Badge: Green (#27AE60) dengan rounded-full
- Social Icons: Circular dengan gradient/solid colors
- Hover Effect: Scale up, shadow increase, translate-y
```

### Warna yang Digunakan:
- **Primary**: #012A4A (Dark Blue)
- **Secondary**: #013d70 (Medium Blue)
- **Accent**: #27AE60 (Green)
- **Text**: #1A1A1A (Almost Black)
- **Background**: White (#FFFFFF)

## Sections di Landing Page

### 1. **Main Vendors Section** (#main-vendors)
- Menampilkan 8 vendor pertama
- Grid 4 kolom di desktop
- Judul: "Vendor Terpercaya Kami"

### 2. **Additional Vendors Section** (#additional-vendors)
- Menampilkan 6 vendor berikutnya (offset 8)
- Grid 3 kolom di desktop
- Judul: "Vendor Pilihan Lainnya"

## Interaksi User

### Untuk Pengunjung:
1. Scroll ke section "Vendor Terpercaya Kami"
2. Lihat card vendor dengan informasi lengkap
3. Klik social media icons untuk langsung menghubungi
4. Klik "Lihat Profil" untuk melihat detail lengkap

### Untuk Vendor:
1. Login ke dashboard
2. Klik menu "Business Profile"
3. Isi semua informasi
4. Upload logo
5. Centang "Tampilkan profil saya di website utama"
6. Simpan
7. Profil akan muncul di landing page

## Fitur Social Media

### Instagram
- Icon: Gradient (purple → pink → orange)
- Link: `https://instagram.com/{username}`

### TikTok
- Icon: Black background
- Link: `https://tiktok.com/@{username}`

### WhatsApp
- Icon: Green background (#22c55e)
- Link: `https://wa.me/{phone_number}`

## Responsive Design

### Desktop (lg: ≥1024px)
- Main Vendors: 4 kolom
- Additional Vendors: 3 kolom

### Tablet (md: ≥768px)
- Main Vendors: 2 kolom
- Additional Vendors: 2 kolom

### Mobile (< 768px)
- Semua: 1 kolom

## Fallback Behavior

### Jika Vendor Tidak Memiliki:
- **Logo**: Menampilkan initial huruf pertama dalam circle
- **Description**: Menampilkan "Vendor profesional dan terpercaya"
- **Location**: Section tidak ditampilkan
- **Social Media**: Section tidak ditampilkan

## SEO & Performance

### Optimasi:
- Lazy loading untuk images
- Proper alt text untuk accessibility
- Semantic HTML structure
- Fast hover transitions (300ms)

### Link Structure:
- Public Profile: `/vendor/{id}/profile`
- Clean, SEO-friendly URLs

## Testing Checklist

- [ ] Vendor dengan Business Profile lengkap muncul di landing page
- [ ] Vendor dengan `is_active = false` tidak muncul
- [ ] Logo ditampilkan dengan benar
- [ ] Social media links berfungsi
- [ ] Button "Lihat Profil" mengarah ke halaman yang benar
- [ ] Responsive di semua device
- [ ] Hover effects berfungsi smooth
- [ ] Fallback untuk vendor tanpa logo/description

## Update Documentation
Last Updated: 2025-11-24
Version: 1.0

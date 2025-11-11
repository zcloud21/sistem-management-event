<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;
use App\Models\City;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jakarta Pusat
        $jakarta_pusat = City::where('code', '3171')->first();
        if ($jakarta_pusat) {
            District::updateOrCreate(['code' => '317101'], ['name' => 'Gambir', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317102'], ['name' => 'Sawah Besar', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317103'], ['name' => 'Kemayoran', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317104'], ['name' => 'Senen', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317105'], ['name' => 'Cempaka Putih', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317106'], ['name' => 'Menteng', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317107'], ['name' => 'Tanah Abang', 'city_id' => $jakarta_pusat->id]);
            District::updateOrCreate(['code' => '317108'], ['name' => 'Johar Baru', 'city_id' => $jakarta_pusat->id]);
        }

        // Jakarta Utara
        $jakarta_utara = City::where('code', '3172')->first();
        if ($jakarta_utara) {
            District::updateOrCreate(['code' => '317201'], ['name' => 'Penjaringan', 'city_id' => $jakarta_utara->id]);
            District::updateOrCreate(['code' => '317202'], ['name' => 'Tanjung Priok', 'city_id' => $jakarta_utara->id]);
            District::updateOrCreate(['code' => '317203'], ['name' => 'Koja', 'city_id' => $jakarta_utara->id]);
            District::updateOrCreate(['code' => '317204'], ['name' => 'Cilincing', 'city_id' => $jakarta_utara->id]);
            District::updateOrCreate(['code' => '317205'], ['name' => 'Pademangan', 'city_id' => $jakarta_utara->id]);
            District::updateOrCreate(['code' => '317206'], ['name' => 'Kelapa Gading', 'city_id' => $jakarta_utara->id]);
        }

        // Jakarta Barat
        $jakarta_barat = City::where('code', '3173')->first();
        if ($jakarta_barat) {
            District::updateOrCreate(['code' => '317301'], ['name' => 'Cengkareng', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317302'], ['name' => 'Grogol Petamburan', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317303'], ['name' => 'Taman Sari', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317304'], ['name' => 'Tambora', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317305'], ['name' => 'Kembangan', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317306'], ['name' => 'Kebon Jeruk', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317307'], ['name' => 'Palmerah', 'city_id' => $jakarta_barat->id]);
            District::updateOrCreate(['code' => '317308'], ['name' => 'Kebayoran Lama', 'city_id' => $jakarta_barat->id]);
        }

        // Jakarta Selatan
        $jakarta_selatan = City::where('code', '3174')->first();
        if ($jakarta_selatan) {
            District::updateOrCreate(['code' => '317401'], ['name' => 'Tebet', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317402'], ['name' => 'Setiabudi', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317403'], ['name' => 'Mampang Prapatan', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317404'], ['name' => 'Pancoran', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317405'], ['name' => 'Jagakarsa', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317406'], ['name' => 'Cilandak', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317407'], ['name' => 'Kebayoran Baru', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317408'], ['name' => 'Pesanggrahan', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317409'], ['name' => 'Kalibata', 'city_id' => $jakarta_selatan->id]);
            District::updateOrCreate(['code' => '317410'], ['name' => 'Pasar Minggu', 'city_id' => $jakarta_selatan->id]);
        }

        // Jakarta Timur
        $jakarta_timur = City::where('code', '3175')->first();
        if ($jakarta_timur) {
            District::updateOrCreate(['code' => '317501'], ['name' => 'Matraman', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317502'], ['name' => 'Pulogadung', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317503'], ['name' => 'Jatinegara', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317504'], ['name' => 'Cakung', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317505'], ['name' => 'Duren Sawit', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317506'], ['name' => 'Kramat Jati', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317507'], ['name' => 'Pasar Rebo', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317508'], ['name' => 'Ciracas', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317509'], ['name' => 'Makasar', 'city_id' => $jakarta_timur->id]);
            District::updateOrCreate(['code' => '317510'], ['name' => 'Cipayung', 'city_id' => $jakarta_timur->id]);
        }

        // Bandung
        $bandung = City::where('code', '3271')->first();
        if ($bandung) {
            District::updateOrCreate(['code' => '327101'], ['name' => 'Sumur Bandung', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327102'], ['name' => 'Regol', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327103'], ['name' => 'Lengkong', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327104'], ['name' => 'Cidadap', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327105'], ['name' => 'Sukajadi', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327106'], ['name' => 'Andir', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327107'], ['name' => 'Cicendo', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327108'], ['name' => 'Bandung Wetan', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327109'], ['name' => 'Astana Anyar', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327110'], ['name' => 'Cibeunying Kaler', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327111'], ['name' => 'Coblong', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327112'], ['name' => 'Sukasari', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327113'], ['name' => 'Cibeunying Kidul', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327114'], ['name' => 'Sarijadi', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327115'], ['name' => 'Buahbatu', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327116'], ['name' => 'Batununggal', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327117'], ['name' => 'Kiaracondong', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327118'], ['name' => 'Bojongloa Kaler', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327119'], ['name' => 'Bojongloa Kidul', 'city_id' => $bandung->id]);
            District::updateOrCreate(['code' => '327120'], ['name' => 'Andir', 'city_id' => $bandung->id]);
        }

        // Bekasi
        $bekasi = City::where('code', '3273')->first();
        if ($bekasi) {
            District::updateOrCreate(['code' => '327301'], ['name' => 'Bekasi Timur', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327302'], ['name' => 'Bekasi Barat', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327303'], ['name' => 'Bekasi Utara', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327304'], ['name' => 'Bekasi Selatan', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327305'], ['name' => 'Rawa Lumbu', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327306'], ['name' => 'Medan Satria', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327307'], ['name' => 'Bantar Gebang', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327308'], ['name' => 'Pondok Gede', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327309'], ['name' => 'Jatiasih', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327310'], ['name' => 'Jatisampurna', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327311'], ['name' => 'Mustika Jaya', 'city_id' => $bekasi->id]);
            District::updateOrCreate(['code' => '327312'], ['name' => 'Pondok Melati', 'city_id' => $bekasi->id]);
        }

        // Depok
        $depok = City::where('code', '3275')->first();
        if ($depok) {
            District::updateOrCreate(['code' => '327501'], ['name' => 'Pancoran Mas', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327502'], ['name' => 'Cimanggis', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327503'], ['name' => 'Sawangan', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327504'], ['name' => 'Limo', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327505'], ['name' => 'Sukmajaya', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327506'], ['name' => 'Beji', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327507'], ['name' => 'Cipayung', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327508'], ['name' => 'Tapos', 'city_id' => $depok->id]);
            District::updateOrCreate(['code' => '327509'], ['name' => 'Bojongsari', 'city_id' => $depok->id]);
        }

        // Cimahi
        $cimahi = City::where('code', '3276')->first();
        if ($cimahi) {
            District::updateOrCreate(['code' => '327601'], ['name' => 'Cimahi Selatan', 'city_id' => $cimahi->id]);
            District::updateOrCreate(['code' => '327602'], ['name' => 'Cimahi Tengah', 'city_id' => $cimahi->id]);
            District::updateOrCreate(['code' => '327603'], ['name' => 'Cimahi Utara', 'city_id' => $cimahi->id]);
        }

        // Surabaya
        $surabaya = City::where('code', '3571')->first();
        if ($surabaya) {
            District::updateOrCreate(['code' => '357101'], ['name' => 'Tanjung Perak', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357102'], ['name' => 'Krembangan', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357103'], ['name' => 'Pabean Cantian', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357104'], ['name' => 'Bubutan', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357105'], ['name' => 'Tegalsari', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357106'], ['name' => 'Genteng', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357107'], ['name' => 'Wonokromo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357108'], ['name' => 'Dukuh Pakis', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357109'], ['name' => 'Gayungan', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357110'], ['name' => 'Wonocolo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357111'], ['name' => 'Tambaksari', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357112'], ['name' => 'Kenjeran', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357113'], ['name' => 'Simokerto', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357114'], ['name' => 'Semampir', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357115'], ['name' => 'Pakal', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357116'], ['name' => 'Sukolilo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357117'], ['name' => 'Mulyorejo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357118'], ['name' => 'Gubeng', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357119'], ['name' => 'Tenggilis Mejoyo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357120'], ['name' => 'Gunung Anyar', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357121'], ['name' => 'Rungkut', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357122'], ['name' => 'Sawahan', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357123'], ['name' => 'Tandes', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357124'], ['name' => 'Karangpilang', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357125'], ['name' => 'Jambangan', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357126'], ['name' => 'Simo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357127'], ['name' => 'Bulak', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357128'], ['name' => 'Krembangan Utara', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357129'], ['name' => 'Sumberrejo', 'city_id' => $surabaya->id]);
            District::updateOrCreate(['code' => '357130'], ['name' => 'Kapasan', 'city_id' => $surabaya->id]);
        }

        // Malang
        $malang = City::where('code', '3572')->first();
        if ($malang) {
            District::updateOrCreate(['code' => '357201'], ['name' => 'Blimbing', 'city_id' => $malang->id]);
            District::updateOrCreate(['code' => '357202'], ['name' => 'Kedungkandang', 'city_id' => $malang->id]);
            District::updateOrCreate(['code' => '357203'], ['name' => 'Lowokwaru', 'city_id' => $malang->id]);
            District::updateOrCreate(['code' => '357204'], ['name' => 'Sukun', 'city_id' => $malang->id]);
            District::updateOrCreate(['code' => '357205'], ['name' => 'Klojen', 'city_id' => $malang->id]);
        }

        // Denpasar
        $denpasar = City::where('code', '5171')->first();
        if ($denpasar) {
            District::updateOrCreate(['code' => '517101'], ['name' => 'Denpasar Barat', 'city_id' => $denpasar->id]);
            District::updateOrCreate(['code' => '517102'], ['name' => 'Denpasar Utara', 'city_id' => $denpasar->id]);
            District::updateOrCreate(['code' => '517103'], ['name' => 'Denpasar Timur', 'city_id' => $denpasar->id]);
            District::updateOrCreate(['code' => '517104'], ['name' => 'Denpasar Selatan', 'city_id' => $denpasar->id]);
        }

        // Semarang
        $semarang = City::where('code', '3371')->first();
        if ($semarang) {
            District::updateOrCreate(['code' => '337101'], ['name' => 'Semarang Tengah', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337102'], ['name' => 'Semarang Utara', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337103'], ['name' => 'Semarang Timur', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337104'], ['name' => 'Gayamsari', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337105'], ['name' => 'Genuk', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337106'], ['name' => 'Pedurungan', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337107'], ['name' => 'Candisari', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337108'], ['name' => 'Tembalang', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337109'], ['name' => 'Banyumanik', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337110'], ['name' => 'Gajahmungkur', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337111'], ['name' => 'Semarang Selatan', 'city_id' => $semarang->id]);
            District::updateOrCreate(['code' => '337112'], ['name' => 'Caturtunggal', 'city_id' => $semarang->id]);
        }

        // Yogyakarta
        $yogyakarta = City::where('code', '3471')->first();
        if ($yogyakarta) {
            District::updateOrCreate(['code' => '347101'], ['name' => 'Jetis', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347102'], ['name' => 'Gondokusuman', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347103'], ['name' => 'Danurejan', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347104'], ['name' => 'Gedongtengen', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347105'], ['name' => 'Ngampilan', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347106'], ['name' => 'Wirobrajan', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347107'], ['name' => 'Mantrijeron', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347108'], ['name' => 'Kraton', 'city_id' => $yogyakarta->id]);
            District::updateOrCreate(['code' => '347109'], ['name' => 'Mergangsan', 'city_id' => $yogyakarta->id]);
        }

        // Makassar
        $makassar = City::where('code', '7371')->first();
        if ($makassar) {
            District::updateOrCreate(['code' => '737101'], ['name' => 'Ujung Pandang', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737102'], ['name' => 'Mamajang', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737103'], ['name' => 'Tamonagaya', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737104'], ['name' => 'Panakkukang', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737105'], ['name' => 'Bontoala', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737106'], ['name' => 'Wajo', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737107'], ['name' => 'Mariso', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737108'], ['name' => 'Sawahan', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737109'], ['name' => 'Biringkanaya', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737110'], ['name' => 'Manggala', 'city_id' => $makassar->id]);
            District::updateOrCreate(['code' => '737111'], ['name' => 'Tamalate', 'city_id' => $makassar->id]);
        }

        // Medan
        $medan = City::where('code', '1271')->first();
        if ($medan) {
            District::updateOrCreate(['code' => '127101'], ['name' => 'Medan Tuntungan', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127102'], ['name' => 'Medan Johor', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127103'], ['name' => 'Medan Amplas', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127104'], ['name' => 'Medan Denai', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127105'], ['name' => 'Medan Area', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127106'], ['name' => 'Medan Kota', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127107'], ['name' => 'Medan Selayang', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127108'], ['name' => 'Medan Baru', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127109'], ['name' => 'Medan Petisah', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127110'], ['name' => 'Medan Helvetia', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127111'], ['name' => 'Medan Sunggal', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127112'], ['name' => 'Medan Belawan', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127113'], ['name' => 'Medan Labuhan', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127114'], ['name' => 'Medan Deli', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127115'], ['name' => 'Medan Marelan', 'city_id' => $medan->id]);
            District::updateOrCreate(['code' => '127116'], ['name' => 'Medan Tembung', 'city_id' => $medan->id]);
        }

        // Palembang
        $palembang = City::where('code', '1671')->first();
        if ($palembang) {
            District::updateOrCreate(['code' => '167101'], ['name' => 'Ilir Barat I', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167102'], ['name' => 'Ilir Barat II', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167103'], ['name' => 'Ilir Timur I', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167104'], ['name' => 'Ilir Timur II', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167105'], ['name' => 'Sakatiga', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167106'], ['name' => 'Sukarami', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167107'], ['name' => 'Sekayu', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167108'], ['name' => 'Plaju', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167109'], ['name' => 'Talang Kelapa', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167110'], ['name' => 'Alang Alang Lebar', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167111'], ['name' => 'Kertapati', 'city_id' => $palembang->id]);
            District::updateOrCreate(['code' => '167112'], ['name' => 'Jakabaring', 'city_id' => $palembang->id]);
        }

        // Banjarmasin
        $banjarmasin = City::where('code', '6371')->first();
        if ($banjarmasin) {
            District::updateOrCreate(['code' => '637101'], ['name' => 'Banjarmasin Tengah', 'city_id' => $banjarmasin->id]);
            District::updateOrCreate(['code' => '637102'], ['name' => 'Banjarmasin Utara', 'city_id' => $banjarmasin->id]);
            District::updateOrCreate(['code' => '637103'], ['name' => 'Banjarmasin Selatan', 'city_id' => $banjarmasin->id]);
            District::updateOrCreate(['code' => '637104'], ['name' => 'Banjarmasin Barat', 'city_id' => $banjarmasin->id]);
            District::updateOrCreate(['code' => '637105'], ['name' => 'Banjarmasin Timur', 'city_id' => $banjarmasin->id]);
        }

        // Pontianak
        $pontianak = City::where('code', '6171')->first();
        if ($pontianak) {
            District::updateOrCreate(['code' => '617101'], ['name' => 'Pontianak Selatan', 'city_id' => $pontianak->id]);
            District::updateOrCreate(['code' => '617102'], ['name' => 'Pontianak Timur', 'city_id' => $pontianak->id]);
            District::updateOrCreate(['code' => '617103'], ['name' => 'Pontianak Barat', 'city_id' => $pontianak->id]);
            District::updateOrCreate(['code' => '617104'], ['name' => 'Pontianak Utara', 'city_id' => $pontianak->id]);
            District::updateOrCreate(['code' => '617105'], ['name' => 'Pontianak Tenggara', 'city_id' => $pontianak->id]);
        }

        // Manado
        $manado = City::where('code', '7171')->first();
        if ($manado) {
            District::updateOrCreate(['code' => '717101'], ['name' => 'Manado Tengah', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717102'], ['name' => 'Manado Utara', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717103'], ['name' => 'Manado Selatan', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717104'], ['name' => 'Sario', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717105'], ['name' => 'Wenang', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717106'], ['name' => 'Tikala', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717107'], ['name' => 'Singkil', 'city_id' => $manado->id]);
            District::updateOrCreate(['code' => '717108'], ['name' => 'Mapanget', 'city_id' => $manado->id]);
        }

        // Ambon
        $ambon = City::where('code', '8171')->first();
        if ($ambon) {
            District::updateOrCreate(['code' => '817101'], ['name' => 'Nusaniwe', 'city_id' => $ambon->id]);
            District::updateOrCreate(['code' => '817102'], ['name' => 'Sirimau', 'city_id' => $ambon->id]);
            District::updateOrCreate(['code' => '817103'], ['name' => 'Baguala', 'city_id' => $ambon->id]);
            District::updateOrCreate(['code' => '817104'], ['name' => 'Leitimur Selatan', 'city_id' => $ambon->id]);
            District::updateOrCreate(['code' => '817105'], ['name' => 'Teluk Ambon', 'city_id' => $ambon->id]);
        }

        // Jayapura
        $jayapura = City::where('code', '9471')->first();
        if ($jayapura) {
            District::updateOrCreate(['code' => '947101'], ['name' => 'Jayapura Selatan', 'city_id' => $jayapura->id]);
            District::updateOrCreate(['code' => '947102'], ['name' => 'Jayapura Utara', 'city_id' => $jayapura->id]);
            District::updateOrCreate(['code' => '947103'], ['name' => 'Abepura', 'city_id' => $jayapura->id]);
            District::updateOrCreate(['code' => '947104'], ['name' => 'Muara Tami', 'city_id' => $jayapura->id]);
            District::updateOrCreate(['code' => '947105'], ['name' => 'Heram', 'city_id' => $jayapura->id]);
        }

        // Tangerang
        $tangerang = City::where('code', '3671')->first();
        if ($tangerang) {
            District::updateOrCreate(['code' => '367101'], ['name' => 'Tangerang', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367102'], ['name' => 'Jatiuwung', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367103'], ['name' => 'Batuceper', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367104'], ['name' => 'Benda', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367105'], ['name' => 'Pasar Kemis', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367106'], ['name' => 'Karawaci', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367107'], ['name' => 'Cipondoh', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367108'], ['name' => 'Ciledug', 'city_id' => $tangerang->id]);
            District::updateOrCreate(['code' => '367109'], ['name' => 'Pinang', 'city_id' => $tangerang->id]);
        }

        // Tangerang Selatan
        $tangerang_selatan = City::where('code', '3674')->first();
        if ($tangerang_selatan) {
            District::updateOrCreate(['code' => '367401'], ['name' => 'Serpong', 'city_id' => $tangerang_selatan->id]);
            District::updateOrCreate(['code' => '367402'], ['name' => 'Serpong Utara', 'city_id' => $tangerang_selatan->id]);
            District::updateOrCreate(['code' => '367403'], ['name' => 'Pondok Aren', 'city_id' => $tangerang_selatan->id]);
            District::updateOrCreate(['code' => '367404'], ['name' => 'Ciputat', 'city_id' => $tangerang_selatan->id]);
            District::updateOrCreate(['code' => '367405'], ['name' => 'Ciputat Timur', 'city_id' => $tangerang_selatan->id]);
            District::updateOrCreate(['code' => '367406'], ['name' => 'Pamulang', 'city_id' => $tangerang_selatan->id]);
        }

        // Bogor
        $bogor = City::where('code', '3272')->first();
        if ($bogor) {
            District::updateOrCreate(['code' => '327201'], ['name' => 'Bogor Timur', 'city_id' => $bogor->id]);
            District::updateOrCreate(['code' => '327202'], ['name' => 'Bogor Barat', 'city_id' => $bogor->id]);
            District::updateOrCreate(['code' => '327203'], ['name' => 'Bogor Tengah', 'city_id' => $bogor->id]);
            District::updateOrCreate(['code' => '327204'], ['name' => 'Bogor Selatan', 'city_id' => $bogor->id]);
            District::updateOrCreate(['code' => '327205'], ['name' => 'Tanah Sereal', 'city_id' => $bogor->id]);
        }

        // Cirebon
        $cirebon = City::where('code', '3274')->first();
        if ($cirebon) {
            District::updateOrCreate(['code' => '327401'], ['name' => 'Kejaksan', 'city_id' => $cirebon->id]);
            District::updateOrCreate(['code' => '327402'], ['name' => 'Lemahwungkuk', 'city_id' => $cirebon->id]);
            District::updateOrCreate(['code' => '327403'], ['name' => 'Harjamukti', 'city_id' => $cirebon->id]);
            District::updateOrCreate(['code' => '327404'], ['name' => 'Pekalipan', 'city_id' => $cirebon->id]);
        }

        // Bandung Regency (Kab. Bandung)
        $bandung_reg = City::where('code', '3204')->first();
        if ($bandung_reg) {
            District::updateOrCreate(['code' => '320401'], ['name' => 'Cileunyi', 'city_id' => $bandung_reg->id, 'postal_code' => '40625']);
            District::updateOrCreate(['code' => '320402'], ['name' => 'Cimenyan', 'city_id' => $bandung_reg->id, 'postal_code' => '40191']);
            District::updateOrCreate(['code' => '320403'], ['name' => 'Cilengkrang', 'city_id' => $bandung_reg->id, 'postal_code' => '40624']);
            District::updateOrCreate(['code' => '320404'], ['name' => 'Bojongsoang', 'city_id' => $bandung_reg->id, 'postal_code' => '40287']);
            District::updateOrCreate(['code' => '320405'], ['name' => 'Margahayu', 'city_id' => $bandung_reg->id, 'postal_code' => '40226']);
            District::updateOrCreate(['code' => '320406'], ['name' => 'Margaasih', 'city_id' => $bandung_reg->id, 'postal_code' => '40212']);
            District::updateOrCreate(['code' => '320407'], ['name' => 'Katapang', 'city_id' => $bandung_reg->id, 'postal_code' => '40921']);
            District::updateOrCreate(['code' => '320408'], ['name' => 'Dayeuhkolot', 'city_id' => $bandung_reg->id, 'postal_code' => '40257']);
            District::updateOrCreate(['code' => '320409'], ['name' => 'Baleendah', 'city_id' => $bandung_reg->id, 'postal_code' => '40375']);
            District::updateOrCreate(['code' => '320410'], ['name' => 'Arjasari', 'city_id' => $bandung_reg->id, 'postal_code' => '40379']);
            District::updateOrCreate(['code' => '320411'], ['name' => 'Banjaran', 'city_id' => $bandung_reg->id, 'postal_code' => '40378']);
            District::updateOrCreate(['code' => '320412'], ['name' => 'Pameungpeuk', 'city_id' => $bandung_reg->id, 'postal_code' => '40376']);
            District::updateOrCreate(['code' => '320413'], ['name' => 'Pangalengan', 'city_id' => $bandung_reg->id, 'postal_code' => '40377']);
            District::updateOrCreate(['code' => '320414'], ['name' => 'Kertasari', 'city_id' => $bandung_reg->id, 'postal_code' => '40381']);
            District::updateOrCreate(['code' => '320415'], ['name' => 'Pasirjambu', 'city_id' => $bandung_reg->id, 'postal_code' => '40973']);
            District::updateOrCreate(['code' => '320416'], ['name' => 'Ciwidey', 'city_id' => $bandung_reg->id, 'postal_code' => '40973']);
            District::updateOrCreate(['code' => '320417'], ['name' => 'Rancabali', 'city_id' => $bandung_reg->id, 'postal_code' => '40973']);
            District::updateOrCreate(['code' => '320418'], ['name' => 'Cimaung', 'city_id' => $bandung_reg->id, 'postal_code' => '40382']);
            District::updateOrCreate(['code' => '320419'], ['name' => 'Soreang', 'city_id' => $bandung_reg->id, 'postal_code' => '40911']);
            District::updateOrCreate(['code' => '320420'], ['name' => 'Pacet', 'city_id' => $bandung_reg->id, 'postal_code' => '40383']);
            District::updateOrCreate(['code' => '320421'], ['name' => 'Ibun', 'city_id' => $bandung_reg->id, 'postal_code' => '40384']);
            District::updateOrCreate(['code' => '320422'], ['name' => 'Paseh', 'city_id' => $bandung_reg->id, 'postal_code' => '40385']);
            District::updateOrCreate(['code' => '320423'], ['name' => 'Cikancung', 'city_id' => $bandung_reg->id, 'postal_code' => '40386']);
            District::updateOrCreate(['code' => '320424'], ['name' => 'Rancaekek', 'city_id' => $bandung_reg->id, 'postal_code' => '40394']);
            District::updateOrCreate(['code' => '320425'], ['name' => 'Cilame', 'city_id' => $bandung_reg->id, 'postal_code' => '40553']);
            District::updateOrCreate(['code' => '320426'], ['name' => 'Cibeunying Kaler', 'city_id' => $bandung_reg->id, 'postal_code' => '40198']);
            District::updateOrCreate(['code' => '320427'], ['name' => 'Cibeunying Kidul', 'city_id' => $bandung_reg->id, 'postal_code' => '40121']);
            District::updateOrCreate(['code' => '320428'], ['name' => 'Baleendah', 'city_id' => $bandung_reg->id, 'postal_code' => '40375']);
        }

        // Bandung Barat Regency (Kab. Bandung Barat)
        $bandung_barat = City::where('code', '3205')->first();
        if ($bandung_barat) {
            District::updateOrCreate(['code' => '320501'], ['name' => 'Lembang', 'city_id' => $bandung_barat->id, 'postal_code' => '40391']);
            District::updateOrCreate(['code' => '320502'], ['name' => 'Parongpong', 'city_id' => $bandung_barat->id, 'postal_code' => '40559']);
            District::updateOrCreate(['code' => '320503'], ['name' => 'Cisarua', 'city_id' => $bandung_barat->id, 'postal_code' => '40553']);
            District::updateOrCreate(['code' => '320504'], ['name' => 'Cikalongwetan', 'city_id' => $bandung_barat->id, 'postal_code' => '40555']);
            District::updateOrCreate(['code' => '320505'], ['name' => 'Cipeundeuy', 'city_id' => $bandung_barat->id, 'postal_code' => '40556']);
            District::updateOrCreate(['code' => '320506'], ['name' => 'Ngamprah', 'city_id' => $bandung_barat->id, 'postal_code' => '40552']);
            District::updateOrCreate(['code' => '320507'], ['name' => 'Cipatat', 'city_id' => $bandung_barat->id, 'postal_code' => '40554']);
            District::updateOrCreate(['code' => '320508'], ['name' => 'Padalarang', 'city_id' => $bandung_barat->id, 'postal_code' => '40553']);
            District::updateOrCreate(['code' => '320509'], ['name' => 'Batujajar', 'city_id' => $bandung_barat->id, 'postal_code' => '40557']);
            District::updateOrCreate(['code' => '320510'], ['name' => 'Cihampelas', 'city_id' => $bandung_barat->id, 'postal_code' => '40562']);
            District::updateOrCreate(['code' => '320511'], ['name' => 'Cililin', 'city_id' => $bandung_barat->id, 'postal_code' => '40561']);
            District::updateOrCreate(['code' => '320512'], ['name' => 'Sindangkerta', 'city_id' => $bandung_barat->id, 'postal_code' => '40563']);
            District::updateOrCreate(['code' => '320513'], ['name' => 'Gunung Halu', 'city_id' => $bandung_barat->id, 'postal_code' => '40564']);
            District::updateOrCreate(['code' => '320514'], ['name' => 'Rongga', 'city_id' => $bandung_barat->id, 'postal_code' => '40565']);
            District::updateOrCreate(['code' => '320515'], ['name' => 'Saguling', 'city_id' => $bandung_barat->id, 'postal_code' => '40566']);
            District::updateOrCreate(['code' => '320516'], ['name' => 'Cipongkor', 'city_id' => $bandung_barat->id, 'postal_code' => '40567']);
            District::updateOrCreate(['code' => '320517'], ['name' => 'Mandalawangi', 'city_id' => $bandung_barat->id, 'postal_code' => '40568']);
        }

        // Garut Regency (Kab. Garut)
        $garut = City::where('code', '3206')->first();
        if ($garut) {
            District::updateOrCreate(['code' => '320601'], ['name' => 'Garut Kota', 'city_id' => $garut->id, 'postal_code' => '44111']);
            District::updateOrCreate(['code' => '320602'], ['name' => 'Karawang', 'city_id' => $garut->id, 'postal_code' => '44181']);  // Assuming Karawang is in Garut (might be confusing with Karawang Regency)
            District::updateOrCreate(['code' => '320603'], ['name' => 'Wanaraja', 'city_id' => $garut->id, 'postal_code' => '44165']);
            District::updateOrCreate(['code' => '320604'], ['name' => 'Tarogong Kaler', 'city_id' => $garut->id, 'postal_code' => '44161']);
            District::updateOrCreate(['code' => '320605'], ['name' => 'Tarogong Kidul', 'city_id' => $garut->id, 'postal_code' => '44161']);
            District::updateOrCreate(['code' => '320606'], ['name' => 'Banyuresmi', 'city_id' => $garut->id, 'postal_code' => '44182']);
            District::updateOrCreate(['code' => '320607'], ['name' => 'Samarang', 'city_id' => $garut->id, 'postal_code' => '44183']);
            District::updateOrCreate(['code' => '320608'], ['name' => 'Pasirwangi', 'city_id' => $garut->id, 'postal_code' => '44152']);
            District::updateOrCreate(['code' => '320609'], ['name' => 'Leles', 'city_id' => $garut->id, 'postal_code' => '44153']);
            District::updateOrCreate(['code' => '320610'], ['name' => 'Kadungora', 'city_id' => $garut->id, 'postal_code' => '44154']);
            District::updateOrCreate(['code' => '320611'], ['name' => 'Leuwigoong', 'city_id' => $garut->id, 'postal_code' => '44192']);
            District::updateOrCreate(['code' => '320612'], ['name' => 'Cibatu', 'city_id' => $garut->id, 'postal_code' => '44184']);
            District::updateOrCreate(['code' => '320613'], ['name' => 'Kersamanah', 'city_id' => $garut->id, 'postal_code' => '44185']);
        }

        // Jakarta Pusat
        $jakarta_pusat = City::where('code', '3171')->first();
        if ($jakarta_pusat) {
            District::updateOrCreate(['code' => '317101'], ['name' => 'Gambir', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10110']);
            District::updateOrCreate(['code' => '317102'], ['name' => 'Sawah Besar', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10710']);
            District::updateOrCreate(['code' => '317103'], ['name' => 'Kemayoran', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10630']);
            District::updateOrCreate(['code' => '317104'], ['name' => 'Senen', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10410']);
            District::updateOrCreate(['code' => '317105'], ['name' => 'Cempaka Putih', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10510']);
            District::updateOrCreate(['code' => '317106'], ['name' => 'Menteng', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10310']);
            District::updateOrCreate(['code' => '317107'], ['name' => 'Tanah Abang', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10210']);
            District::updateOrCreate(['code' => '317108'], ['name' => 'Johar Baru', 'city_id' => $jakarta_pusat->id, 'postal_code' => '10560']);
        }

        // Jakarta Utara
        $jakarta_utara = City::where('code', '3172')->first();
        if ($jakarta_utara) {
            District::updateOrCreate(['code' => '317201'], ['name' => 'Penjaringan', 'city_id' => $jakarta_utara->id, 'postal_code' => '14440']);
            District::updateOrCreate(['code' => '317202'], ['name' => 'Tanjung Priok', 'city_id' => $jakarta_utara->id, 'postal_code' => '14360']);
            District::updateOrCreate(['code' => '317203'], ['name' => 'Koja', 'city_id' => $jakarta_utara->id, 'postal_code' => '14210']);
            District::updateOrCreate(['code' => '317204'], ['name' => 'Cilincing', 'city_id' => $jakarta_utara->id, 'postal_code' => '14120']);
            District::updateOrCreate(['code' => '317205'], ['name' => 'Pademangan', 'city_id' => $jakarta_utara->id, 'postal_code' => '14420']);
            District::updateOrCreate(['code' => '317206'], ['name' => 'Kelapa Gading', 'city_id' => $jakarta_utara->id, 'postal_code' => '14240']);
        }

        // Jakarta Barat
        $jakarta_barat = City::where('code', '3173')->first();
        if ($jakarta_barat) {
            District::updateOrCreate(['code' => '317301'], ['name' => 'Cengkareng', 'city_id' => $jakarta_barat->id, 'postal_code' => '11730']);
            District::updateOrCreate(['code' => '317302'], ['name' => 'Grogol Petamburan', 'city_id' => $jakarta_barat->id, 'postal_code' => '11460']);
            District::updateOrCreate(['code' => '317303'], ['name' => 'Taman Sari', 'city_id' => $jakarta_barat->id, 'postal_code' => '11110']);
            District::updateOrCreate(['code' => '317304'], ['name' => 'Tambora', 'city_id' => $jakarta_barat->id, 'postal_code' => '11260']);
            District::updateOrCreate(['code' => '317305'], ['name' => 'Kembangan', 'city_id' => $jakarta_barat->id, 'postal_code' => '11610']);
            District::updateOrCreate(['code' => '317306'], ['name' => 'Kebon Jeruk', 'city_id' => $jakarta_barat->id, 'postal_code' => '11510']);
            District::updateOrCreate(['code' => '317307'], ['name' => 'Palmerah', 'city_id' => $jakarta_barat->id, 'postal_code' => '11480']);
            District::updateOrCreate(['code' => '317308'], ['name' => 'Kebayoran Lama', 'city_id' => $jakarta_barat->id, 'postal_code' => '12210']);
        }

        // Jakarta Selatan
        $jakarta_selatan = City::where('code', '3174')->first();
        if ($jakarta_selatan) {
            District::updateOrCreate(['code' => '317401'], ['name' => 'Tebet', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12810']);
            District::updateOrCreate(['code' => '317402'], ['name' => 'Setiabudi', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12910']);
            District::updateOrCreate(['code' => '317403'], ['name' => 'Mampang Prapatan', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12790']);
            District::updateOrCreate(['code' => '317404'], ['name' => 'Pancoran', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12780']);
            District::updateOrCreate(['code' => '317405'], ['name' => 'Jagakarsa', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12620']);
            District::updateOrCreate(['code' => '317406'], ['name' => 'Cilandak', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12430']);
            District::updateOrCreate(['code' => '317407'], ['name' => 'Kebayoran Baru', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12110']);
            District::updateOrCreate(['code' => '317408'], ['name' => 'Pesanggrahan', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12220']);
            District::updateOrCreate(['code' => '317409'], ['name' => 'Kalibata', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12740']);
            District::updateOrCreate(['code' => '317410'], ['name' => 'Pasar Minggu', 'city_id' => $jakarta_selatan->id, 'postal_code' => '12520']);
        }

        // Jakarta Timur
        $jakarta_timur = City::where('code', '3175')->first();
        if ($jakarta_timur) {
            District::updateOrCreate(['code' => '317501'], ['name' => 'Matraman', 'city_id' => $jakarta_timur->id, 'postal_code' => '13140']);
            District::updateOrCreate(['code' => '317502'], ['name' => 'Pulogadung', 'city_id' => $jakarta_timur->id, 'postal_code' => '13260']);
            District::updateOrCreate(['code' => '317503'], ['name' => 'Jatinegara', 'city_id' => $jakarta_timur->id, 'postal_code' => '13310']);
            District::updateOrCreate(['code' => '317504'], ['name' => 'Cakung', 'city_id' => $jakarta_timur->id, 'postal_code' => '13910']);
            District::updateOrCreate(['code' => '317505'], ['name' => 'Duren Sawit', 'city_id' => $jakarta_timur->id, 'postal_code' => '13340']);
            District::updateOrCreate(['code' => '317506'], ['name' => 'Kramat Jati', 'city_id' => $jakarta_timur->id, 'postal_code' => '13510']);
            District::updateOrCreate(['code' => '317507'], ['name' => 'Pasar Rebo', 'city_id' => $jakarta_timur->id, 'postal_code' => '13760']);
            District::updateOrCreate(['code' => '317508'], ['name' => 'Ciracas', 'city_id' => $jakarta_timur->id, 'postal_code' => '13740']);
            District::updateOrCreate(['code' => '317509'], ['name' => 'Makasar', 'city_id' => $jakarta_timur->id, 'postal_code' => '13620']);
            District::updateOrCreate(['code' => '317510'], ['name' => 'Cipayung', 'city_id' => $jakarta_timur->id, 'postal_code' => '13840']);
        }

        // Surabaya
        $surabaya = City::where('code', '3571')->first();
        if ($surabaya) {
            District::updateOrCreate(['code' => '357101'], ['name' => 'Tanjung Perak', 'city_id' => $surabaya->id, 'postal_code' => '60165']);
            District::updateOrCreate(['code' => '357102'], ['name' => 'Krembangan', 'city_id' => $surabaya->id, 'postal_code' => '60173']);
            District::updateOrCreate(['code' => '357103'], ['name' => 'Pabean Cantian', 'city_id' => $surabaya->id, 'postal_code' => '60162']);
            District::updateOrCreate(['code' => '357104'], ['name' => 'Bubutan', 'city_id' => $surabaya->id, 'postal_code' => '60281']);
            District::updateOrCreate(['code' => '357105'], ['name' => 'Tegalsari', 'city_id' => $surabaya->id, 'postal_code' => '60282']);
            District::updateOrCreate(['code' => '357106'], ['name' => 'Genteng', 'city_id' => $surabaya->id, 'postal_code' => '60272']);
            District::updateOrCreate(['code' => '357107'], ['name' => 'Wonokromo', 'city_id' => $surabaya->id, 'postal_code' => '60245']);
            District::updateOrCreate(['code' => '357108'], ['name' => 'Dukuh Pakis', 'city_id' => $surabaya->id, 'postal_code' => '60224']);
            District::updateOrCreate(['code' => '357109'], ['name' => 'Gayungan', 'city_id' => $surabaya->id, 'postal_code' => '60235']);
            District::updateOrCreate(['code' => '357110'], ['name' => 'Wonocolo', 'city_id' => $surabaya->id, 'postal_code' => '60237']);
            District::updateOrCreate(['code' => '357111'], ['name' => 'Tambaksari', 'city_id' => $surabaya->id, 'postal_code' => '60132']);
            District::updateOrCreate(['code' => '357112'], ['name' => 'Kenjeran', 'city_id' => $surabaya->id, 'postal_code' => '60129']);
            District::updateOrCreate(['code' => '357113'], ['name' => 'Simokerto', 'city_id' => $surabaya->id, 'postal_code' => '60141']);
            District::updateOrCreate(['code' => '357114'], ['name' => 'Semampir', 'city_id' => $surabaya->id, 'postal_code' => '60167']);
            District::updateOrCreate(['code' => '357115'], ['name' => 'Pakal', 'city_id' => $surabaya->id, 'postal_code' => '60197']);
        }

        // Denpasar
        $denpasar = City::where('code', '5171')->first();
        if ($denpasar) {
            District::updateOrCreate(['code' => '517101'], ['name' => 'Denpasar Barat', 'city_id' => $denpasar->id, 'postal_code' => '80111']);
            District::updateOrCreate(['code' => '517102'], ['name' => 'Denpasar Utara', 'city_id' => $denpasar->id, 'postal_code' => '80112']);
            District::updateOrCreate(['code' => '517103'], ['name' => 'Denpasar Timur', 'city_id' => $denpasar->id, 'postal_code' => '80237']);
            District::updateOrCreate(['code' => '517104'], ['name' => 'Denpasar Selatan', 'city_id' => $denpasar->id, 'postal_code' => '80221']);
        }

        // Bandar Lampung
        $bandar_lampung = City::where('code', '1871')->first();
        if ($bandar_lampung) {
            District::updateOrCreate(['code' => '187101'], ['name' => 'Kedaton', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187102'], ['name' => 'Sukarame', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187103'], ['name' => 'Tanjungkarang Timur', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187104'], ['name' => 'Panjang', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187105'], ['name' => 'Tanjungkarang Pusat', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187106'], ['name' => 'Tanjungkarang Barat', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187107'], ['name' => 'Tanjungsenang', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187108'], ['name' => 'Langkapura', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187109'], ['name' => 'Kemiling', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187110'], ['name' => 'Labuhan Ratu', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187111'], ['name' => 'Sukabumi', 'city_id' => $bandar_lampung->id]);
            District::updateOrCreate(['code' => '187112'], ['name' => 'Way Halim', 'city_id' => $bandar_lampung->id]);
        }

        // Bengkulu
        $bengkulu = City::where('code', '1771')->first();
        if ($bengkulu) {
            District::updateOrCreate(['code' => '177101'], ['name' => 'Gading Cempaka', 'city_id' => $bengkulu->id]);
            District::updateOrCreate(['code' => '177102'], ['name' => 'Ratu Agung', 'city_id' => $bengkulu->id]);
            District::updateOrCreate(['code' => '177103'], ['name' => 'Ratu Samban', 'city_id' => $bengkulu->id]);
            District::updateOrCreate(['code' => '177104'], ['name' => 'Selebar', 'city_id' => $bengkulu->id]);
            District::updateOrCreate(['code' => '177105'], ['name' => 'Teluk Segara', 'city_id' => $bengkulu->id]);
            District::updateOrCreate(['code' => '177106'], ['name' => 'Singaran Pati', 'city_id' => $bengkulu->id]);
        }

        // Padang
        $padang = City::where('code', '1371')->first();
        if ($padang) {
            District::updateOrCreate(['code' => '137101'], ['name' => 'Padang Timur', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137102'], ['name' => 'Padang Barat', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137103'], ['name' => 'Padang Utara', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137104'], ['name' => 'Padang Selatan', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137105'], ['name' => 'Bungus Teluk Kabung', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137106'], ['name' => 'Lubuk Begalung', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137107'], ['name' => 'Lubuk Kilangan', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137108'], ['name' => 'Pauh', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137109'], ['name' => 'Kuranji', 'city_id' => $padang->id]);
            District::updateOrCreate(['code' => '137110'], ['name' => 'Nanggalo', 'city_id' => $padang->id]);
        }

        // Pekanbaru
        $pekanbaru = City::where('code', '1471')->first();
        if ($pekanbaru) {
            District::updateOrCreate(['code' => '147101'], ['name' => 'Sukajadi', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147102'], ['name' => 'Pekanbaru Kota', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147103'], ['name' => 'Sail', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147104'], ['name' => 'Lima Puluh', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147105'], ['name' => 'Senapelan', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147106'], ['name' => 'Rumbai', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147107'], ['name' => 'Bukit Raya', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147108'], ['name' => 'Tampan', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147109'], ['name' => 'Marpoyan Damai', 'city_id' => $pekanbaru->id]);
            District::updateOrCreate(['code' => '147110'], ['name' => 'Tenayan Raya', 'city_id' => $pekanbaru->id]);
        }

        // Batam
        $batam = City::where('code', '2172')->first();
        if ($batam) {
            District::updateOrCreate(['code' => '217201'], ['name' => 'Belakang Padang', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217202'], ['name' => 'Batu Ampar', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217203'], ['name' => 'Sei Beduk', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217204'], ['name' => 'Nongsa', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217205'], ['name' => 'Bulang', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217206'], ['name' => 'Lubuk Baja', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217207'], ['name' => 'Sekupang', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217208'], ['name' => 'Bengkong', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217209'], ['name' => 'Batam Kota', 'city_id' => $batam->id]);
            District::updateOrCreate(['code' => '217210'], ['name' => 'Sagulung', 'city_id' => $batam->id]);
        }

        // Banjarmasin
        $banjar = City::where('code', '6372')->first();
        if ($banjar) {
            District::updateOrCreate(['code' => '637201'], ['name' => 'Banjarmasin Tengah', 'city_id' => $banjar->id]);
            District::updateOrCreate(['code' => '637202'], ['name' => 'Banjarmasin Selatan', 'city_id' => $banjar->id]);
            District::updateOrCreate(['code' => '637203'], ['name' => 'Banjarmasin Timur', 'city_id' => $banjar->id]);
            District::updateOrCreate(['code' => '637204'], ['name' => 'Banjarmasin Utara', 'city_id' => $banjar->id]);
            District::updateOrCreate(['code' => '637205'], ['name' => 'Banjarmasin Barat', 'city_id' => $banjar->id]);
        }
    }
}

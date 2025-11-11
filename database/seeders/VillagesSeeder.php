<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Village;
use App\Models\District;

class VillagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jakarta Pusat - Gambir
        $gambir = District::where('code', '317101')->first();
        if ($gambir) {
            Village::updateOrCreate(['code' => '3171011001'], ['name' => 'Kel. Gambir', 'district_id' => $gambir->id, 'postal_code' => '10110']);
            Village::updateOrCreate(['code' => '3171011002'], ['name' => 'Kel. Kebon Sirih', 'district_id' => $gambir->id, 'postal_code' => '10110']);
            Village::updateOrCreate(['code' => '3171011003'], ['name' => 'Kel. Petojo Utara', 'district_id' => $gambir->id, 'postal_code' => '10110']);
            Village::updateOrCreate(['code' => '3171011004'], ['name' => 'Kel. Petojo Selatan', 'district_id' => $gambir->id, 'postal_code' => '10110']);
            Village::updateOrCreate(['code' => '3171011005'], ['name' => 'Kel. Cideng', 'district_id' => $gambir->id, 'postal_code' => '10150']);
        }

        // Jakarta Pusat - Menteng
        $menteng = District::where('code', '317106')->first();
        if ($menteng) {
            Village::updateOrCreate(['code' => '3171061001'], ['name' => 'Kel. Menteng', 'district_id' => $menteng->id, 'postal_code' => '10310']);
            Village::updateOrCreate(['code' => '3171061002'], ['name' => 'Kel. Pegangsaan', 'district_id' => $menteng->id, 'postal_code' => '10320']);
            Village::updateOrCreate(['code' => '3171061003'], ['name' => 'Kel. Cikini', 'district_id' => $menteng->id, 'postal_code' => '10330']);
            Village::updateOrCreate(['code' => '3171061004'], ['name' => 'Kel. Gondangdia', 'district_id' => $menteng->id, 'postal_code' => '10350']);
            Village::updateOrCreate(['code' => '3171061005'], ['name' => 'Kel. Kebon Kacang', 'district_id' => $menteng->id, 'postal_code' => '10350']);
        }

        // Jakarta Utara - Penjaringan
        $penjaringan = District::where('code', '317201')->first();
        if ($penjaringan) {
            Village::updateOrCreate(['code' => '3172011001'], ['name' => 'Kel. Penjaringan', 'district_id' => $penjaringan->id, 'postal_code' => '14440']);
            Village::updateOrCreate(['code' => '3172011002'], ['name' => 'Kel. Kamal Muara', 'district_id' => $penjaringan->id, 'postal_code' => '14470']);
            Village::updateOrCreate(['code' => '3172011003'], ['name' => 'Kel. Kapuk Muara', 'district_id' => $penjaringan->id, 'postal_code' => '14460']);
            Village::updateOrCreate(['code' => '3172011004'], ['name' => 'Kel. Pejagalan', 'district_id' => $penjaringan->id, 'postal_code' => '14450']);
            Village::updateOrCreate(['code' => '3172011005'], ['name' => 'Kel. Pluit', 'district_id' => $penjaringan->id, 'postal_code' => '14450']);
        }

        // Jakarta Barat - Cengkareng
        $cengkareng = District::where('code', '317301')->first();
        if ($cengkareng) {
            Village::updateOrCreate(['code' => '3173011001'], ['name' => 'Kel. Cengkareng Timur', 'district_id' => $cengkareng->id, 'postal_code' => '11730']);
            Village::updateOrCreate(['code' => '3173011002'], ['name' => 'Kel. Cengkareng Barat', 'district_id' => $cengkareng->id, 'postal_code' => '11730']);
            Village::updateOrCreate(['code' => '3173011003'], ['name' => 'Kel. Duri Kosambi', 'district_id' => $cengkareng->id, 'postal_code' => '11750']);
            Village::updateOrCreate(['code' => '3173011004'], ['name' => 'Kel. Rawa Buaya', 'district_id' => $cengkareng->id, 'postal_code' => '11740']);
            Village::updateOrCreate(['code' => '3173011005'], ['name' => 'Kel. Kedaung Kali Angke', 'district_id' => $cengkareng->id, 'postal_code' => '11750']);
        }

        // Jakarta Selatan - Tebet
        $tebet = District::where('code', '317401')->first();
        if ($tebet) {
            Village::updateOrCreate(['code' => '3174011001'], ['name' => 'Kel. Tebet Barat', 'district_id' => $tebet->id, 'postal_code' => '12810']);
            Village::updateOrCreate(['code' => '3174011002'], ['name' => 'Kel. Tebet Timur', 'district_id' => $tebet->id, 'postal_code' => '12820']);
            Village::updateOrCreate(['code' => '3174011003'], ['name' => 'Kel. Manggarai', 'district_id' => $tebet->id, 'postal_code' => '12850']);
            Village::updateOrCreate(['code' => '3174011004'], ['name' => 'Kel. Manggarai Selatan', 'district_id' => $tebet->id, 'postal_code' => '12860']);
            Village::updateOrCreate(['code' => '3174011005'], ['name' => 'Kel. Kebon Baru', 'district_id' => $tebet->id, 'postal_code' => '12830']);
        }

        // Jakarta Timur - Matraman
        $matraman = District::where('code', '317501')->first();
        if ($matraman) {
            Village::updateOrCreate(['code' => '3175011001'], ['name' => 'Kel. Palmeriam', 'district_id' => $matraman->id, 'postal_code' => '13140']);
            Village::updateOrCreate(['code' => '3175011002'], ['name' => 'Kel. Kayu Manis', 'district_id' => $matraman->id, 'postal_code' => '13140']);
            Village::updateOrCreate(['code' => '3175011003'], ['name' => 'Kel. Kebon Manggis', 'district_id' => $matraman->id, 'postal_code' => '13150']);
            Village::updateOrCreate(['code' => '3175011004'], ['name' => 'Kel. Pegadungan', 'district_id' => $matraman->id, 'postal_code' => '13150']);
            Village::updateOrCreate(['code' => '3175011005'], ['name' => 'Kel. Utan Kayu Selatan', 'district_id' => $matraman->id, 'postal_code' => '13150']);
        }

        // Bandung - Lembang
        $lembang = District::where('code', '320501')->first();
        if ($lembang) {
            Village::updateOrCreate(['code' => '3205012001'], ['name' => 'Desa Lembang', 'district_id' => $lembang->id, 'postal_code' => '40391']);
            Village::updateOrCreate(['code' => '3205012002'], ['name' => 'Desa Jayagiri', 'district_id' => $lembang->id, 'postal_code' => '40391']);
            Village::updateOrCreate(['code' => '3205012003'], ['name' => 'Desa Wangunsari', 'district_id' => $lembang->id, 'postal_code' => '40391']);
            Village::updateOrCreate(['code' => '3205012004'], ['name' => 'Desa Cikidang', 'district_id' => $lembang->id, 'postal_code' => '40391']);
            Village::updateOrCreate(['code' => '3205012005'], ['name' => 'Desa Cikalong', 'district_id' => $lembang->id, 'postal_code' => '40391']);
        }

        // Bandung Barat - Cikalongwetan
        $cikalongwetan = District::where('code', '320504')->first();
        if ($cikalongwetan) {
            Village::updateOrCreate(['code' => '3205042001'], ['name' => 'Desa Cikalong', 'district_id' => $cikalongwetan->id, 'postal_code' => '40555']);
            Village::updateOrCreate(['code' => '3205042002'], ['name' => 'Desa Ciwareng', 'district_id' => $cikalongwetan->id, 'postal_code' => '40555']);
            Village::updateOrCreate(['code' => '3205042003'], ['name' => 'Desa Cirompang', 'district_id' => $cikalongwetan->id, 'postal_code' => '40555']);
            Village::updateOrCreate(['code' => '3205042004'], ['name' => 'Desa Cipada', 'district_id' => $cikalongwetan->id, 'postal_code' => '40555']);
            Village::updateOrCreate(['code' => '3205042005'], ['name' => 'Desa Cikadu', 'district_id' => $cikalongwetan->id, 'postal_code' => '40555']);
        }

        // Bandung - Cileunyi
        $cileunyi = District::where('code', '320401')->first();
        if ($cileunyi) {
            Village::updateOrCreate(['code' => '3204012001'], ['name' => 'Desa Cileunyi Kulon', 'district_id' => $cileunyi->id, 'postal_code' => '40625']);
            Village::updateOrCreate(['code' => '3204012002'], ['name' => 'Desa Cileunyi Wetan', 'district_id' => $cileunyi->id, 'postal_code' => '40625']);
            Village::updateOrCreate(['code' => '3204012003'], ['name' => 'Desa Jelegong', 'district_id' => $cileunyi->id, 'postal_code' => '40625']);
            Village::updateOrCreate(['code' => '3204012004'], ['name' => 'Desa Mekarwangi', 'district_id' => $cileunyi->id, 'postal_code' => '40625']);
            Village::updateOrCreate(['code' => '3204012005'], ['name' => 'Desa Cibeunying', 'district_id' => $cileunyi->id, 'postal_code' => '40625']);
        }

        // Surabaya - Tegalsari
        $tegalsari = District::where('code', '357105')->first();
        if ($tegalsari) {
            Village::updateOrCreate(['code' => '3571051001'], ['name' => 'Kel. Tegalsari', 'district_id' => $tegalsari->id, 'postal_code' => '60282']);
            Village::updateOrCreate(['code' => '3571051002'], ['name' => 'Kel. Kedungdoro', 'district_id' => $tegalsari->id, 'postal_code' => '60282']);
            Village::updateOrCreate(['code' => '3571051003'], ['name' => 'Kel. Dukuh Kupang', 'district_id' => $tegalsari->id, 'postal_code' => '60282']);
            Village::updateOrCreate(['code' => '3571051004'], ['name' => 'Kel. Putat Jaya', 'district_id' => $tegalsari->id, 'postal_code' => '60283']);
            Village::updateOrCreate(['code' => '3571051005'], ['name' => 'Kel. Dukuh Menanggal', 'district_id' => $tegalsari->id, 'postal_code' => '60284']);
        }

        // Denpasar - Denpasar Barat
        $denpasar_barat = District::where('code', '517101')->first();
        if ($denpasar_barat) {
            Village::updateOrCreate(['code' => '5171011001'], ['name' => 'Kel. Dauh Puri', 'district_id' => $denpasar_barat->id, 'postal_code' => '80111']);
            Village::updateOrCreate(['code' => '5171011002'], ['name' => 'Kel. Dauh Puri Kauh', 'district_id' => $denpasar_barat->id, 'postal_code' => '80112']);
            Village::updateOrCreate(['code' => '5171011003'], ['name' => 'Kel. Padangsambian', 'district_id' => $denpasar_barat->id, 'postal_code' => '80115']);
            Village::updateOrCreate(['code' => '5171011004'], ['name' => 'Kel. Padangsambian Kaja', 'district_id' => $denpasar_barat->id, 'postal_code' => '80116']);
            Village::updateOrCreate(['code' => '5171011005'], ['name' => 'Kel. Tegal Harum', 'district_id' => $denpasar_barat->id, 'postal_code' => '80117']);
        }
    }
}
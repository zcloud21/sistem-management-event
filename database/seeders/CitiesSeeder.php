<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Province;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jakarta
        $jakarta = Province::where('code', '31')->first();
        if ($jakarta) {
            City::updateOrCreate(['code' => '3171'], ['name' => 'Kota Jakarta Pusat', 'province_id' => $jakarta->id]);
            City::updateOrCreate(['code' => '3172'], ['name' => 'Kota Jakarta Utara', 'province_id' => $jakarta->id]);
            City::updateOrCreate(['code' => '3173'], ['name' => 'Kota Jakarta Barat', 'province_id' => $jakarta->id]);
            City::updateOrCreate(['code' => '3174'], ['name' => 'Kota Jakarta Selatan', 'province_id' => $jakarta->id]);
            City::updateOrCreate(['code' => '3175'], ['name' => 'Kota Jakarta Timur', 'province_id' => $jakarta->id]);
        }

        // Jawa Barat cities and regencies
        $jabar = Province::where('code', '32')->first();
        if ($jabar) {
            // Cities
            City::updateOrCreate(['code' => '3271'], ['name' => 'Kota Bandung', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3272'], ['name' => 'Kota Bogor', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3273'], ['name' => 'Kota Bekasi', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3274'], ['name' => 'Kota Cirebon', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3275'], ['name' => 'Kota Depok', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3276'], ['name' => 'Kota Cimahi', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3277'], ['name' => 'Kota Tasikmalaya', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3278'], ['name' => 'Kota Banjar', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3279'], ['name' => 'Kota Sukabumi', 'province_id' => $jabar->id]);
            // Regencies
            City::updateOrCreate(['code' => '3201'], ['name' => 'Kab. Bogor', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3202'], ['name' => 'Kab. Sukabumi', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3203'], ['name' => 'Kab. Cianjur', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3204'], ['name' => 'Kab. Bandung', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3205'], ['name' => 'Kab. Bandung Barat', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3206'], ['name' => 'Kab. Garut', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3207'], ['name' => 'Kab. Tasikmalaya', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3208'], ['name' => 'Kab. Ciamis', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3209'], ['name' => 'Kab. Kuningan', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3210'], ['name' => 'Kab. Cirebon', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3211'], ['name' => 'Kab. Majalengka', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3212'], ['name' => 'Kab. Sumedang', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3213'], ['name' => 'Kab. Indramayu', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3214'], ['name' => 'Kab. Subang', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3215'], ['name' => 'Kab. Purwakarta', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3216'], ['name' => 'Kab. Karawang', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3217'], ['name' => 'Kab. Bekasi', 'province_id' => $jabar->id]);
            City::updateOrCreate(['code' => '3218'], ['name' => 'Kab. Pangandaran', 'province_id' => $jabar->id]);
        }

        // Jawa Tengah cities and regencies
        $jateng = Province::where('code', '33')->first();
        if ($jateng) {
            // Cities
            City::updateOrCreate(['code' => '3371'], ['name' => 'Kota Semarang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3372'], ['name' => 'Kota Surakarta', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3373'], ['name' => 'Kota Salatiga', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3374'], ['name' => 'Kota Magelang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3375'], ['name' => 'Kota Pekalongan', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3376'], ['name' => 'Kota Tegal', 'province_id' => $jateng->id]);
            // Regencies
            City::updateOrCreate(['code' => '3301'], ['name' => 'Kab. Cilacap', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3302'], ['name' => 'Kab. Banyumas', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3303'], ['name' => 'Kab. Purbalingga', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3304'], ['name' => 'Kab. Banjarnegara', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3305'], ['name' => 'Kab. Kebumen', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3306'], ['name' => 'Kab. Purworejo', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3307'], ['name' => 'Kab. Wonosobo', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3308'], ['name' => 'Kab. Magelang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3309'], ['name' => 'Kab. Boyolali', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3310'], ['name' => 'Kab. Klaten', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3311'], ['name' => 'Kab. Sukoharjo', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3312'], ['name' => 'Kab. Wonogiri', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3313'], ['name' => 'Kab. Karanganyar', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3314'], ['name' => 'Kab. Sragen', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3315'], ['name' => 'Kab. Grobogan', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3316'], ['name' => 'Kab. Blora', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3317'], ['name' => 'Kab. Rembang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3318'], ['name' => 'Kab. Pati', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3319'], ['name' => 'Kab. Kudus', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3320'], ['name' => 'Kab. Jepara', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3321'], ['name' => 'Kab. Demak', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3322'], ['name' => 'Kab. Semarang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3323'], ['name' => 'Kab. Temanggung', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3324'], ['name' => 'Kab. Kendal', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3325'], ['name' => 'Kab. Batang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3326'], ['name' => 'Kab. Pekalongan', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3327'], ['name' => 'Kab. Pemalang', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3328'], ['name' => 'Kab. Tegal', 'province_id' => $jateng->id]);
            City::updateOrCreate(['code' => '3329'], ['name' => 'Kab. Brebes', 'province_id' => $jateng->id]);
        }

        // DI Yogyakarta (special region)
        $yogya = Province::where('code', '34')->first();
        if ($yogya) {
            City::updateOrCreate(['code' => '3471'], ['name' => 'Kota Yogyakarta', 'province_id' => $yogya->id]);
            City::updateOrCreate(['code' => '3401'], ['name' => 'Kab. Sleman', 'province_id' => $yogya->id]);
            City::updateOrCreate(['code' => '3402'], ['name' => 'Kab. Bantul', 'province_id' => $yogya->id]);
            City::updateOrCreate(['code' => '3403'], ['name' => 'Kab. Gunung Kidul', 'province_id' => $yogya->id]);
            City::updateOrCreate(['code' => '3404'], ['name' => 'Kab. Kulon Progo', 'province_id' => $yogya->id]);
        }

        // Jawa Timur cities and regencies
        $jatim = Province::where('code', '35')->first();
        if ($jatim) {
            // Cities
            City::updateOrCreate(['code' => '3571'], ['name' => 'Kota Surabaya', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3572'], ['name' => 'Kota Malang', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3573'], ['name' => 'Kota Probolinggo', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3574'], ['name' => 'Kota Pasuruan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3575'], ['name' => 'Kota Mojokerto', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3576'], ['name' => 'Kota Madiun', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3577'], ['name' => 'Kota Kediri', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3578'], ['name' => 'Kota Blitar', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3579'], ['name' => 'Kota Jember', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3580'], ['name' => 'Kota Sidoarjo', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3581'], ['name' => 'Kota Batu', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3582'], ['name' => 'Kota Mojokerto', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3583'], ['name' => 'Kota Malang', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3584'], ['name' => 'Kota Kediri', 'province_id' => $jatim->id]);
            // Regencies
            City::updateOrCreate(['code' => '3501'], ['name' => 'Kab. Pacitan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3502'], ['name' => 'Kab. Ponorogo', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3503'], ['name' => 'Kab. Trenggalek', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3504'], ['name' => 'Kab. Tulungagung', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3505'], ['name' => 'Kab. Blitar', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3506'], ['name' => 'Kab. Kediri', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3507'], ['name' => 'Kab. Malang', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3508'], ['name' => 'Kab. Lumajang', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3509'], ['name' => 'Kab. Jember', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3510'], ['name' => 'Kab. Banyuwangi', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3511'], ['name' => 'Kab. Bondowoso', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3512'], ['name' => 'Kab. Situbondo', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3513'], ['name' => 'Kab. Probolinggo', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3514'], ['name' => 'Kab. Pasuruan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3515'], ['name' => 'Kab. Sidoarjo', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3516'], ['name' => 'Kab. Mojokerto', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3517'], ['name' => 'Kab. Jombang', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3518'], ['name' => 'Kab. Nganjuk', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3519'], ['name' => 'Kab. Madiun', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3520'], ['name' => 'Kab. Magetan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3521'], ['name' => 'Kab. Ngawi', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3522'], ['name' => 'Kab. Bojonegoro', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3523'], ['name' => 'Kab. Tuban', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3524'], ['name' => 'Kab. Lamongan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3525'], ['name' => 'Kab. Gresik', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3526'], ['name' => 'Kab. Bangkalan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3527'], ['name' => 'Kab. Sampang', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3528'], ['name' => 'Kab. Pamekasan', 'province_id' => $jatim->id]);
            City::updateOrCreate(['code' => '3529'], ['name' => 'Kab. Sumenep', 'province_id' => $jatim->id]);
        }

        // Banten cities and regencies
        $banten = Province::where('code', '36')->first();
        if ($banten) {
            // Cities
            City::updateOrCreate(['code' => '3671'], ['name' => 'Kota Tangerang', 'province_id' => $banten->id]);
            City::updateOrCreate(['code' => '3672'], ['name' => 'Kota Cilegon', 'province_id' => $banten->id]);
            City::updateOrCreate(['code' => '3673'], ['name' => 'Kota Serang', 'province_id' => $banten->id]);
            City::updateOrCreate(['code' => '3674'], ['name' => 'Kota Tangerang Selatan', 'province_id' => $banten->id]);
            // Regencies
            City::updateOrCreate(['code' => '3601'], ['name' => 'Kab. Pandeglang', 'province_id' => $banten->id]);
            City::updateOrCreate(['code' => '3602'], ['name' => 'Kab. Lebak', 'province_id' => $banten->id]);
            City::updateOrCreate(['code' => '3603'], ['name' => 'Kab. Tangerang', 'province_id' => $banten->id]);
            City::updateOrCreate(['code' => '3604'], ['name' => 'Kab. Serang', 'province_id' => $banten->id]);
        }

        // Bali cities and regencies
        $bali = Province::where('code', '51')->first();
        if ($bali) {
            City::updateOrCreate(['code' => '5171'], ['name' => 'Kota Denpasar', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5101'], ['name' => 'Kab. Buleleng', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5102'], ['name' => 'Kab. Jembrana', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5103'], ['name' => 'Kab. Tabanan', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5104'], ['name' => 'Kab. Badung', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5105'], ['name' => 'Kab. Gianyar', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5106'], ['name' => 'Kab. Klungkung', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5107'], ['name' => 'Kab. Bangli', 'province_id' => $bali->id]);
            City::updateOrCreate(['code' => '5108'], ['name' => 'Kab. Karangasem', 'province_id' => $bali->id]);
        }

        // Sumatera Utara cities and regencies
        $sumut = Province::where('code', '12')->first();
        if ($sumut) {
            // Cities
            City::updateOrCreate(['code' => '1271'], ['name' => 'Kota Medan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1272'], ['name' => 'Kota Pematangsiantar', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1273'], ['name' => 'Kota Pekanbaru', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1274'], ['name' => 'Kota Binjai', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1275'], ['name' => 'Kota Padang Sidempuan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1276'], ['name' => 'Kota Lubuk Pakam', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1277'], ['name' => 'Kota Tanjung Balai', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1278'], ['name' => 'Kota Sibolga', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1279'], ['name' => 'Kota Tebing Tinggi', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1280'], ['name' => 'Kota Padang Sidempuan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1281'], ['name' => 'Kota Gunungsitoli', 'province_id' => $sumut->id]);
            // Regencies
            City::updateOrCreate(['code' => '1201'], ['name' => 'Kab. Nias', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1202'], ['name' => 'Kab. Mandailing Natal', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1203'], ['name' => 'Kab. Tapanuli Selatan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1204'], ['name' => 'Kab. Tapanuli Tengah', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1205'], ['name' => 'Kab. Tapanuli Utara', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1206'], ['name' => 'Kab. Labuhan Batu', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1207'], ['name' => 'Kab. Asahan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1208'], ['name' => 'Kab. Simalungun', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1209'], ['name' => 'Kab. Dairi', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1210'], ['name' => 'Kab. Karo', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1211'], ['name' => 'Kab. Deli Serdang', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1212'], ['name' => 'Kab. Langkat', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1213'], ['name' => 'Kab. Nias Selatan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1214'], ['name' => 'Kab. Humbang Hasundutan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1215'], ['name' => 'Kab. Padang Lawas Utara', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1216'], ['name' => 'Kab. Padang Lawas', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1217'], ['name' => 'Kab. Labuhan Batu Selatan', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1218'], ['name' => 'Kab. Labuhan Batu Utara', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1219'], ['name' => 'Kab. Nias Utara', 'province_id' => $sumut->id]);
            City::updateOrCreate(['code' => '1220'], ['name' => 'Kab. Nias Barat', 'province_id' => $sumut->id]);
        }

        // Sumatera Barat cities and regencies
        $sumbar = Province::where('code', '13')->first();
        if ($sumbar) {
            // Cities
            City::updateOrCreate(['code' => '1371'], ['name' => 'Kota Padang', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1372'], ['name' => 'Kota Solok', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1373'], ['name' => 'Kota Sawah Lunto', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1374'], ['name' => 'Kota Padang Panjang', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1375'], ['name' => 'Kota Bukit Tinggi', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1376'], ['name' => 'Kota Payakumbuh', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1377'], ['name' => 'Kota Pariaman', 'province_id' => $sumbar->id]);
            // Regencies
            City::updateOrCreate(['code' => '1301'], ['name' => 'Kab. Pesisir Selatan', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1302'], ['name' => 'Kab. Solok', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1303'], ['name' => 'Kab. Sijunjung', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1304'], ['name' => 'Kab. Tanah Datar', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1305'], ['name' => 'Kab. Padang Pariaman', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1306'], ['name' => 'Kab. Agam', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1307'], ['name' => 'Kab. Lima Puluh Koto', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1308'], ['name' => 'Kab. Pasaman', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1309'], ['name' => 'Kab. Kepulauan Mentawai', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1310'], ['name' => 'Kab. Dharmasraya', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1311'], ['name' => 'Kab. Solok Selatan', 'province_id' => $sumbar->id]);
            City::updateOrCreate(['code' => '1312'], ['name' => 'Kab. Pasaman Barat', 'province_id' => $sumbar->id]);
        }

        // Riau cities and regencies
        $riau = Province::where('code', '14')->first();
        if ($riau) {
            // Cities
            City::updateOrCreate(['code' => '1471'], ['name' => 'Kota Pekanbaru', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1472'], ['name' => 'Kota Dumai', 'province_id' => $riau->id]);
            // Regencies
            City::updateOrCreate(['code' => '1401'], ['name' => 'Kab. Kepulauan Riau', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1402'], ['name' => 'Kab. Bengkalis', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1403'], ['name' => 'Kab. Indragiri Hulu', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1404'], ['name' => 'Kab. Indragiri Hilir', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1405'], ['name' => 'Kab. Pelalawan', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1406'], ['name' => 'Kab. Siak', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1407'], ['name' => 'Kab. Kampar', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1408'], ['name' => 'Kab. Rokan Hulu', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1409'], ['name' => 'Kab. Rokan Hilir', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1410'], ['name' => 'Kab. Kuantan Singingi', 'province_id' => $riau->id]);
            City::updateOrCreate(['code' => '1411'], ['name' => 'Kab. Kepulauan Meranti', 'province_id' => $riau->id]);
        }

        // Jambi cities and regencies
        $jambi = Province::where('code', '15')->first();
        if ($jambi) {
            // Cities
            City::updateOrCreate(['code' => '1571'], ['name' => 'Kota Jambi', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1572'], ['name' => 'Kota Sungai Penuh', 'province_id' => $jambi->id]);
            // Regencies
            City::updateOrCreate(['code' => '1501'], ['name' => 'Kab. Kerinci', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1502'], ['name' => 'Kab. Merangin', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1503'], ['name' => 'Kab. Sarolangun', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1504'], ['name' => 'Kab. Batang Hari', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1505'], ['name' => 'Kab. Muaro Jambi', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1506'], ['name' => 'Kab. Tanjung Jabung Timur', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1507'], ['name' => 'Kab. Tanjung Jabung Barat', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1508'], ['name' => 'Kab. Tebo', 'province_id' => $jambi->id]);
            City::updateOrCreate(['code' => '1509'], ['name' => 'Kab. Bungo', 'province_id' => $jambi->id]);
        }

        // Sumatera Selatan cities and regencies
        $sumsel = Province::where('code', '16')->first();
        if ($sumsel) {
            // Cities
            City::updateOrCreate(['code' => '1671'], ['name' => 'Kota Palembang', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1672'], ['name' => 'Kota Pagar Alam', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1673'], ['name' => 'Kota Lubuk Linggau', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1674'], ['name' => 'Kota Prabumulih', 'province_id' => $sumsel->id]);
            // Regencies
            City::updateOrCreate(['code' => '1601'], ['name' => 'Kab. Musi Banyuasin', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1602'], ['name' => 'Kab. Musi Rawas', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1603'], ['name' => 'Kab. Musi Rawas Utara', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1604'], ['name' => 'Kab. Banyuasin', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1605'], ['name' => 'Kab. Ogan Komering Ulu', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1606'], ['name' => 'Kab. Ogan Komering Ilir', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1607'], ['name' => 'Kab. Ogan Ilir', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1608'], ['name' => 'Kab. Empat Lawang', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1609'], ['name' => 'Kab. Lahat', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1610'], ['name' => 'Kab. Muara Enim', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1611'], ['name' => 'Kab. Ogan Komering Ulu Selatan', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1612'], ['name' => 'Kab. Ogan Komering Ulu Timur', 'province_id' => $sumsel->id]);
            City::updateOrCreate(['code' => '1613'], ['name' => 'Kab. Penukal Abab Lematang Ilir', 'province_id' => $sumsel->id]);
        }

        // Bengkulu cities and regencies
        $bengkulu = Province::where('code', '17')->first();
        if ($bengkulu) {
            // Cities
            City::updateOrCreate(['code' => '1771'], ['name' => 'Kota Bengkulu', 'province_id' => $bengkulu->id]);
            // Regencies
            City::updateOrCreate(['code' => '1701'], ['name' => 'Kab. Bengkulu Selatan', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1702'], ['name' => 'Kab. Rejang Lebong', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1703'], ['name' => 'Kab. Bengkulu Utara', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1704'], ['name' => 'Kab. Kaur', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1705'], ['name' => 'Kab. Seluma', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1706'], ['name' => 'Kab. Muko Muko', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1707'], ['name' => 'Kab. Lebong', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1708'], ['name' => 'Kab. Kepahiang', 'province_id' => $bengkulu->id]);
            City::updateOrCreate(['code' => '1709'], ['name' => 'Kab. Bengkulu Tengah', 'province_id' => $bengkulu->id]);
        }

        // Lampung cities and regencies
        $lampung = Province::where('code', '18')->first();
        if ($lampung) {
            // Cities
            City::updateOrCreate(['code' => '1871'], ['name' => 'Kota Bandar Lampung', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1872'], ['name' => 'Kota Metro', 'province_id' => $lampung->id]);
            // Regencies
            City::updateOrCreate(['code' => '1801'], ['name' => 'Kab. Tanggamus', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1802'], ['name' => 'Kab. Lampung Timur', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1803'], ['name' => 'Kab. Lampung Selatan', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1804'], ['name' => 'Kab. Lampung Barat', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1805'], ['name' => 'Kab. Lampung Tengah', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1806'], ['name' => 'Kab. Lampung Utara', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1807'], ['name' => 'Kab. Way Kanan', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1808'], ['name' => 'Kab. Tulang Bawang', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1809'], ['name' => 'Kab. Pesawaran', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1810'], ['name' => 'Kab. Pringsewu', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1811'], ['name' => 'Kab. Mesuji', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1812'], ['name' => 'Kab. Tulang Bawang Barat', 'province_id' => $lampung->id]);
            City::updateOrCreate(['code' => '1813'], ['name' => 'Kab. Pesisir Barat', 'province_id' => $lampung->id]);
        }

        // Kepulauan Bangka Belitung cities and regencies
        $bangka = Province::where('code', '19')->first();
        if ($bangka) {
            // Cities
            City::updateOrCreate(['code' => '1971'], ['name' => 'Kota Pangkal Pinang', 'province_id' => $bangka->id]);
            // Regencies
            City::updateOrCreate(['code' => '1901'], ['name' => 'Kab. Bangka', 'province_id' => $bangka->id]);
            City::updateOrCreate(['code' => '1902'], ['name' => 'Kab. Belitung', 'province_id' => $bangka->id]);
            City::updateOrCreate(['code' => '1903'], ['name' => 'Kab. Bangka Barat', 'province_id' => $bangka->id]);
            City::updateOrCreate(['code' => '1904'], ['name' => 'Kab. Bangka Tengah', 'province_id' => $bangka->id]);
            City::updateOrCreate(['code' => '1905'], ['name' => 'Kab. Bangka Selatan', 'province_id' => $bangka->id]);
            City::updateOrCreate(['code' => '1906'], ['name' => 'Kab. Belitung Timur', 'province_id' => $bangka->id]);
        }

        // Kepulauan Riau cities and regencies
        $riau_island = Province::where('code', '21')->first();
        if ($riau_island) {
            // Cities
            City::updateOrCreate(['code' => '2171'], ['name' => 'Kota Tanjung Pinang', 'province_id' => $riau_island->id]);
            City::updateOrCreate(['code' => '2172'], ['name' => 'Kota Batam', 'province_id' => $riau_island->id]);
            // Regencies
            City::updateOrCreate(['code' => '2101'], ['name' => 'Kab. Bintan', 'province_id' => $riau_island->id]);
            City::updateOrCreate(['code' => '2102'], ['name' => 'Kab. Karimun', 'province_id' => $riau_island->id]);
            City::updateOrCreate(['code' => '2103'], ['name' => 'Kab. Natuna', 'province_id' => $riau_island->id]);
            City::updateOrCreate(['code' => '2104'], ['name' => 'Kab. Lingga', 'province_id' => $riau_island->id]);
            City::updateOrCreate(['code' => '2105'], ['name' => 'Kab. Kepulauan Anambas', 'province_id' => $riau_island->id]);
        }

        // Kalimantan Barat cities and regencies
        $kalbar = Province::where('code', '61')->first();
        if ($kalbar) {
            // Cities
            City::updateOrCreate(['code' => '6171'], ['name' => 'Kota Pontianak', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6172'], ['name' => 'Kota Singkawang', 'province_id' => $kalbar->id]);
            // Regencies
            City::updateOrCreate(['code' => '6101'], ['name' => 'Kab. Sambas', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6102'], ['name' => 'Kab. Bengkayang', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6103'], ['name' => 'Kab. Landak', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6104'], ['name' => 'Kab. Mempawah', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6105'], ['name' => 'Kab. Kubu Raya', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6106'], ['name' => 'Kab. Ketapang', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6107'], ['name' => 'Kab. Sintang', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6108'], ['name' => 'Kab. Kapuas Hulu', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6109'], ['name' => 'Kab. Sekadau', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6110'], ['name' => 'Kab. Melawi', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6111'], ['name' => 'Kab. Kayong Utara', 'province_id' => $kalbar->id]);
            City::updateOrCreate(['code' => '6112'], ['name' => 'Kab. Kubu Raya', 'province_id' => $kalbar->id]);
        }

        // Kalimantan Tengah cities and regencies
        $kalteng = Province::where('code', '62')->first();
        if ($kalteng) {
            // Cities
            City::updateOrCreate(['code' => '6271'], ['name' => 'Kota Palangkaraya', 'province_id' => $kalteng->id]);
            // Regencies
            City::updateOrCreate(['code' => '6201'], ['name' => 'Kab. Kotawaringin Barat', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6202'], ['name' => 'Kab. Kotawaringin Timur', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6203'], ['name' => 'Kab. Kapuas', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6204'], ['name' => 'Kab. Barito Selatan', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6205'], ['name' => 'Kab. Barito Utara', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6206'], ['name' => 'Kab. Katingan', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6207'], ['name' => 'Kab. Seruyan', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6208'], ['name' => 'Kab. Sukamara', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6209'], ['name' => 'Kab. Lamandau', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6210'], ['name' => 'Kab. Gunung Mas', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6211'], ['name' => 'Kab. Pulang Pisau', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6212'], ['name' => 'Kab. Murung Raya', 'province_id' => $kalteng->id]);
            City::updateOrCreate(['code' => '6213'], ['name' => 'Kab. Barito Timur', 'province_id' => $kalteng->id]);
        }

        // Kalimantan Selatan cities and regencies
        $kalsel = Province::where('code', '63')->first();
        if ($kalsel) {
            // Cities
            City::updateOrCreate(['code' => '6371'], ['name' => 'Kota Banjarmasin', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6372'], ['name' => 'Kota Banjarbaru', 'province_id' => $kalsel->id]);
            // Regencies
            City::updateOrCreate(['code' => '6301'], ['name' => 'Kab. Tabalong', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6302'], ['name' => 'Kab. Tanah Laut', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6303'], ['name' => 'Kab. Kotabaru', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6304'], ['name' => 'Kab. Banjar', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6305'], ['name' => 'Kab. Barito Kuala', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6306'], ['name' => 'Kab. Tapin', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6307'], ['name' => 'Kab. Hulu Sungai Selatan', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6308'], ['name' => 'Kab. Hulu Sungai Tengah', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6309'], ['name' => 'Kab. Hulu Sungai Utara', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6310'], ['name' => 'Kab. Balangan', 'province_id' => $kalsel->id]);
            City::updateOrCreate(['code' => '6311'], ['name' => 'Kab. Tanah Bumbu', 'province_id' => $kalsel->id]);
        }

        // Kalimantan Timur cities and regencies
        $kaltim = Province::where('code', '64')->first();
        if ($kaltim) {
            // Cities
            City::updateOrCreate(['code' => '6471'], ['name' => 'Kota Balikpapan', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6472'], ['name' => 'Kota Samarinda', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6474'], ['name' => 'Kota Bontang', 'province_id' => $kaltim->id]);
            // Regencies
            City::updateOrCreate(['code' => '6401'], ['name' => 'Kab. Paser', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6402'], ['name' => 'Kab. Kutai Barat', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6403'], ['name' => 'Kab. Kutai Kartanegara', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6404'], ['name' => 'Kab. Kutai Timur', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6405'], ['name' => 'Kab. Berau', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6408'], ['name' => 'Kab. Penajam Paser Utara', 'province_id' => $kaltim->id]);
            City::updateOrCreate(['code' => '6409'], ['name' => 'Kab. Mahakam Ulu', 'province_id' => $kaltim->id]);
        }

        // Kalimantan Utara cities and regencies
        $kaltara = Province::where('code', '65')->first();
        if ($kaltara) {
            // Cities
            City::updateOrCreate(['code' => '6571'], ['name' => 'Kota Tarakan', 'province_id' => $kaltara->id]);
            // Regencies
            City::updateOrCreate(['code' => '6501'], ['name' => 'Kab. Malinau', 'province_id' => $kaltara->id]);
            City::updateOrCreate(['code' => '6502'], ['name' => 'Kab. Bulungan', 'province_id' => $kaltara->id]);
            City::updateOrCreate(['code' => '6503'], ['name' => 'Kab. Tana Tidung', 'province_id' => $kaltara->id]);
            City::updateOrCreate(['code' => '6504'], ['name' => 'Kab. Nunukan', 'province_id' => $kaltara->id]);
        }

        // Sulawesi Utara cities and regencies
        $sulut = Province::where('code', '71')->first();
        if ($sulut) {
            // Cities
            City::updateOrCreate(['code' => '7171'], ['name' => 'Kota Manado', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7172'], ['name' => 'Kota Bitung', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7173'], ['name' => 'Kota Tomohon', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7174'], ['name' => 'Kota Kotamobagu', 'province_id' => $sulut->id]);
            // Regencies
            City::updateOrCreate(['code' => '7101'], ['name' => 'Kab. Bolaang Mongondow', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7102'], ['name' => 'Kab. Minahasa', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7103'], ['name' => 'Kab. Kepulauan Sangihe', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7104'], ['name' => 'Kab. Kepulauan Talaud', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7105'], ['name' => 'Kab. Minahasa Selatan', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7106'], ['name' => 'Kab. Minahasa Utara', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7107'], ['name' => 'Kab. Bolaang Mongondow Utara', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7108'], ['name' => 'Kab. Kepulauan Siau Tagulandang Biaro', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7109'], ['name' => 'Kab. Minahasa Tenggara', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7110'], ['name' => 'Kab. Bolaang Mongondow Selatan', 'province_id' => $sulut->id]);
            City::updateOrCreate(['code' => '7111'], ['name' => 'Kab. Bolaang Mongondow Timur', 'province_id' => $sulut->id]);
        }

        // Sulawesi Tengah cities and regencies
        $sulteng = Province::where('code', '72')->first();
        if ($sulteng) {
            // Cities
            City::updateOrCreate(['code' => '7271'], ['name' => 'Kota Palu', 'province_id' => $sulteng->id]);
            // Regencies
            City::updateOrCreate(['code' => '7201'], ['name' => 'Kab. Banggai Kepulauan', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7202'], ['name' => 'Kab. Banggai', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7203'], ['name' => 'Kab. Morowali', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7204'], ['name' => 'Kab. Poso', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7205'], ['name' => 'Kab. Donggala', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7206'], ['name' => 'Kab. Toli-Toli', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7207'], ['name' => 'Kab. Buol', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7208'], ['name' => 'Kab. Parigi Moutong', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7209'], ['name' => 'Kab. Tojo Una-Una', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7210'], ['name' => 'Kab. Sigi', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7211'], ['name' => 'Kab. Banggai Laut', 'province_id' => $sulteng->id]);
            City::updateOrCreate(['code' => '7212'], ['name' => 'Kab. Morowali Utara', 'province_id' => $sulteng->id]);
        }

        // Sulawesi Selatan cities and regencies
        $sulsel = Province::where('code', '73')->first();
        if ($sulsel) {
            // Cities
            City::updateOrCreate(['code' => '7371'], ['name' => 'Kota Makassar', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7372'], ['name' => 'Kota Parepare', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7373'], ['name' => 'Kota Palopo', 'province_id' => $sulsel->id]);
            // Regencies
            City::updateOrCreate(['code' => '7301'], ['name' => 'Kab. Jeneponto', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7302'], ['name' => 'Kab. Takalar', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7303'], ['name' => 'Kab. Gowa', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7304'], ['name' => 'Kab. Sidenreng Rappang', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7305'], ['name' => 'Kab. Wajo', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7306'], ['name' => 'Kab. Soppeng', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7307'], ['name' => 'Kab. Bone', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7308'], ['name' => 'Kab. Maros', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7309'], ['name' => 'Kab. Barru', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7310'], ['name' => 'Kab. Pangkajene Kepulauan', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7311'], ['name' => 'Kab. Bantaeng', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7312'], ['name' => 'Kab. Bulukumba', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7313'], ['name' => 'Kab. Sinjai', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7314'], ['name' => 'Kab. Pinrang', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7315'], ['name' => 'Kab. Enrekang', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7316'], ['name' => 'Kab. Luwu', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7317'], ['name' => 'Kab. Tana Toraja', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7318'], ['name' => 'Kab. Luwu Utara', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7319'], ['name' => 'Kab. Toraja Utara', 'province_id' => $sulsel->id]);
            City::updateOrCreate(['code' => '7320'], ['name' => 'Kab. Luwu Timur', 'province_id' => $sulsel->id]);
        }

        // Sulawesi Tenggara cities and regencies
        $sultenggara = Province::where('code', '74')->first();
        if ($sultenggara) {
            // Cities
            City::updateOrCreate(['code' => '7471'], ['name' => 'Kota Kendari', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7472'], ['name' => 'Kota Baubau', 'province_id' => $sultenggara->id]);
            // Regencies
            City::updateOrCreate(['code' => '7401'], ['name' => 'Kab. Buton', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7402'], ['name' => 'Kab. Muna', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7403'], ['name' => 'Kab. Konawe', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7404'], ['name' => 'Kab. Kolaka', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7405'], ['name' => 'Kab. Konawe Selatan', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7406'], ['name' => 'Kab. Bombana', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7407'], ['name' => 'Kab. Wakatobi', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7408'], ['name' => 'Kab. Kolaka Utara', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7409'], ['name' => 'Kab. Buton Utara', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7410'], ['name' => 'Kab. Kolaka Timur', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7411'], ['name' => 'Kab. Konawe Utara', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7412'], ['name' => 'Kab. Buton Tengah', 'province_id' => $sultenggara->id]);
            City::updateOrCreate(['code' => '7413'], ['name' => 'Kab. Buton Selatan', 'province_id' => $sultenggara->id]);
        }

        // Gorontalo cities and regencies
        $gorontalo = Province::where('code', '75')->first();
        if ($gorontalo) {
            // Cities
            City::updateOrCreate(['code' => '7571'], ['name' => 'Kota Gorontalo', 'province_id' => $gorontalo->id]);
            // Regencies
            City::updateOrCreate(['code' => '7501'], ['name' => 'Kab. Gorontalo', 'province_id' => $gorontalo->id]);
            City::updateOrCreate(['code' => '7502'], ['name' => 'Kab. Boalemo', 'province_id' => $gorontalo->id]);
            City::updateOrCreate(['code' => '7503'], ['name' => 'Kab. Bone Bolango', 'province_id' => $gorontalo->id]);
            City::updateOrCreate(['code' => '7504'], ['name' => 'Kab. Pohuwato', 'province_id' => $gorontalo->id]);
            City::updateOrCreate(['code' => '7505'], ['name' => 'Kab. Gorontalo Utara', 'province_id' => $gorontalo->id]);
        }

        // Sulawesi Barat cities and regencies
        $sulbar = Province::where('code', '76')->first();
        if ($sulbar) {
            // Cities
            City::updateOrCreate(['code' => '7671'], ['name' => 'Kota Mamuju', 'province_id' => $sulbar->id]);
            // Regencies
            City::updateOrCreate(['code' => '7601'], ['name' => 'Kab. Mamuju Utara', 'province_id' => $sulbar->id]);
            City::updateOrCreate(['code' => '7602'], ['name' => 'Kab. Mamasa', 'province_id' => $sulbar->id]);
            City::updateOrCreate(['code' => '7603'], ['name' => 'Kab. Polewali Mandar', 'province_id' => $sulbar->id]);
            City::updateOrCreate(['code' => '7604'], ['name' => 'Kab. Majene', 'province_id' => $sulbar->id]);
            City::updateOrCreate(['code' => '7605'], ['name' => 'Kab. Mamuju Tengah', 'province_id' => $sulbar->id]);
        }

        // Maluku cities and regencies
        $maluku = Province::where('code', '81')->first();
        if ($maluku) {
            // Cities
            City::updateOrCreate(['code' => '8171'], ['name' => 'Kota Ambon', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8172'], ['name' => 'Kota Tual', 'province_id' => $maluku->id]);
            // Regencies
            City::updateOrCreate(['code' => '8101'], ['name' => 'Kab. Maluku Tengah', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8102'], ['name' => 'Kab. Maluku Tenggara', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8103'], ['name' => 'Kab. Maluku Tenggara Barat', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8104'], ['name' => 'Kab. Buru', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8105'], ['name' => 'Kab. Kepulauan Aru', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8106'], ['name' => 'Kab. Seram Bagian Barat', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8107'], ['name' => 'Kab. Seram Bagian Timur', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8108'], ['name' => 'Kab. Maluku Barat Daya', 'province_id' => $maluku->id]);
            City::updateOrCreate(['code' => '8109'], ['name' => 'Kab. Buru Selatan', 'province_id' => $maluku->id]);
        }

        // Maluku Utara cities and regencies
        $malut = Province::where('code', '82')->first();
        if ($malut) {
            // Cities
            City::updateOrCreate(['code' => '8271'], ['name' => 'Kota Ternate', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8272'], ['name' => 'Kota Tidore Kepulauan', 'province_id' => $malut->id]);
            // Regencies
            City::updateOrCreate(['code' => '8201'], ['name' => 'Kab. Halmahera Barat', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8202'], ['name' => 'Kab. Halmahera Tengah', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8203'], ['name' => 'Kab. Halmahera Utara', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8204'], ['name' => 'Kab. Halmahera Selatan', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8205'], ['name' => 'Kab. Kepulauan Sula', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8206'], ['name' => 'Kab. Halmahera Timur', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8207'], ['name' => 'Kab. Pulau Morotai', 'province_id' => $malut->id]);
            City::updateOrCreate(['code' => '8208'], ['name' => 'Kab. Pulau Taliabu', 'province_id' => $malut->id]);
        }

        // Papua Barat cities and regencies
        $papuabarat = Province::where('code', '91')->first();
        if ($papuabarat) {
            // Cities
            City::updateOrCreate(['code' => '9171'], ['name' => 'Kota Sorong', 'province_id' => $papuabarat->id]);
            // Regencies
            City::updateOrCreate(['code' => '9101'], ['name' => 'Kab. Sorong', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9102'], ['name' => 'Kab. Manokwari', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9103'], ['name' => 'Kab. Fak-Fak', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9104'], ['name' => 'Kab. Raja Ampat', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9105'], ['name' => 'Kab. Teluk Bintuni', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9106'], ['name' => 'Kab. Teluk Wondama', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9107'], ['name' => 'Kab. Kaimana', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9108'], ['name' => 'Kab. Tambrauw', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9109'], ['name' => 'Kab. Maybrat', 'province_id' => $papuabarat->id]);
            City::updateOrCreate(['code' => '9110'], ['name' => 'Kab. Pegunungan Arfak', 'province_id' => $papuabarat->id]);
        }

        // Papua cities and regencies
        $papua = Province::where('code', '94')->first();
        if ($papua) {
            // Cities
            City::updateOrCreate(['code' => '9471'], ['name' => 'Kota Jayapura', 'province_id' => $papua->id]);
            // Regencies
            City::updateOrCreate(['code' => '9401'], ['name' => 'Kab. Jayapura', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9402'], ['name' => 'Kab. Keerom', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9403'], ['name' => 'Kab. Jayawijaya', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9404'], ['name' => 'Kab. Nabire', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9405'], ['name' => 'Kab. Kepulauan Yapen', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9406'], ['name' => 'Kab. Biak Numfor', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9407'], ['name' => 'Kab. Paniai', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9408'], ['name' => 'Kab. Puncak Jaya', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9409'], ['name' => 'Kab. Mimika', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9410'], ['name' => 'Kab. Boven Digoel', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9411'], ['name' => 'Kab. Mappi', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9412'], ['name' => 'Kab. Asmat', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9413'], ['name' => 'Kab. Yahukimo', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9414'], ['name' => 'Kab. Pegunungan Bintang', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9415'], ['name' => 'Kab. Tolikara', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9416'], ['name' => 'Kab. Sarmi', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9417'], ['name' => 'Kab. Deiyai', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9418'], ['name' => 'Kab. Dogiyai', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9419'], ['name' => 'Kab. Intan Jaya', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9420'], ['name' => 'Kab. Lanny Jaya', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9421'], ['name' => 'Kab. Mamberamo Raya', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9422'], ['name' => 'Kab. Mamberamo Tengah', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9423'], ['name' => 'Kab. Yalimo', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9424'], ['name' => 'Kab. Puncak', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9425'], ['name' => 'Kab. Puncak Timur', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9426'], ['name' => 'Kab. Mappi', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9427'], ['name' => 'Kab. Asmat', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9428'], ['name' => 'Kab. Supiori', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9429'], ['name' => 'Kab. Yape', 'province_id' => $papua->id]);
            City::updateOrCreate(['code' => '9430'], ['name' => 'Kab. Mappi', 'province_id' => $papua->id]);
        }
    }
}

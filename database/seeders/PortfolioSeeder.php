<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'Wedding Outdoor di Taman',
            'description' => 'Pernikahan outdoor yang romantis dengan dekorasi bunga segar dan pemandangan alam yang indah. Acara ini menampilkan berbagai elemen alami yang menciptakan suasana yang hangat dan tak terlupakan.',
            'image' => 'portfolios/wedding-outdoor.jpg',
            'client' => 'Budi & Siti',
            'project_date' => '2024-06-15',
            'category' => 'Wedding',
            'location' => 'Taman Kota, Jakarta'
        ]);

        Portfolio::create([
            'title' => 'Corporate Gathering 2024',
            'description' => 'Acara gathering perusahaan besar dengan lebih dari 500 peserta. Acara ini mencakup berbagai kegiatan team building, hiburan, dan makan malam eksklusif.',
            'image' => 'portfolios/corporate-gathering.jpg',
            'client' => 'PT Maju Jaya',
            'project_date' => '2024-08-20',
            'category' => 'Corporate',
            'location' => 'Hotel Grand Palace, Bandung'
        ]);

        Portfolio::create([
            'title' => 'Pesta Ulang Tahun Anak Tema Princess',
            'description' => 'Pesta ulang tahun anak dengan tema princess yang menakjubkan. Dekorasi penuh warna dengan elemen interaktif untuk anak-anak.',
            'image' => 'portfolios/birthday-princess.jpg',
            'client' => 'Keluarga Pratama',
            'project_date' => '2024-09-10',
            'category' => 'Children Party',
            'location' => 'Rumah Pribadi, Surabaya'
        ]);

        Portfolio::create([
            'title' => 'Product Launch Gadget Terbaru',
            'description' => 'Peluncuran produk gadget terbaru dengan tampilan futuristik dan teknologi canggih. Acara ini menarik perhatian media dan influencer teknologi.',
            'image' => 'portfolios/product-launch.jpg',
            'client' => 'TechVision Inc',
            'project_date' => '2024-10-05',
            'category' => 'Product Launch',
            'location' => 'Convention Center, Bali'
        ]);

        Portfolio::create([
            'title' => 'Gala Dinner Amal',
            'description' => 'Makan malam amal eksklusif untuk membantu korban bencana alam. Acara ini menampilkan lelang amal dan hiburan premium.',
            'image' => 'portfolios/gala-dinner.jpg',
            'client' => 'Yayasan Peduli Bangsa',
            'project_date' => '2024-07-30',
            'category' => 'Gala Dinner',
            'location' => 'JW Marriott Hotel, Jakarta'
        ]);

        Portfolio::create([
            'title' => 'Konferensi Teknologi 2024',
            'description' => 'Konferensi teknologi internasional dengan pembicara dari seluruh dunia. Acara ini mencakup sesi presentasi, pameran, dan jaringan profesional.',
            'image' => 'portfolios/tech-conference.jpg',
            'client' => 'Tech Summit Organization',
            'project_date' => '2024-11-12',
            'category' => 'Conference',
            'location' => 'International Convention Center, Yogyakarta'
        ]);
    }
}

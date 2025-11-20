<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Pernikahan Lengkap',
            'description' => 'Paket pernikahan lengkap termasuk dekorasi, katering, dokumentasi, dan hiburan. Ditangani oleh tim profesional berpengalaman.',
            'price' => 25000000,
            'duration' => 12,
            'image' => 'services/wedding-full.jpg',
            'category' => 'Wedding',
            'is_available' => true
        ]);

        Service::create([
            'name' => 'Dekorasi Acara',
            'description' => 'Layanan dekorasi untuk berbagai jenis acara dengan desainer profesional. Konsep dapat disesuaikan dengan tema dan kebutuhan klien.',
            'price' => 8000000,
            'duration' => 8,
            'image' => 'services/decoration.jpg',
            'category' => 'Decoration',
            'is_available' => true
        ]);

        Service::create([
            'name' => 'Katering Premium',
            'description' => 'Layanan katering dengan menu premium untuk acara formal dan informal. Termasuk layanan pramusaji dan perlengkapan makan.',
            'price' => 12000000,
            'duration' => 6,
            'image' => 'services/catering.jpg',
            'category' => 'Catering',
            'is_available' => true
        ]);

        Service::create([
            'name' => 'Fotografi & Video',
            'description' => 'Layanan dokumentasi profesional dengan tim fotografer dan videografer berpengalaman. Termasuk sesi pre-wedding dan editan premium.',
            'price' => 7500000,
            'duration' => 10,
            'image' => 'services/photography.jpg',
            'category' => 'Photography',
            'is_available' => true
        ]);

        Service::create([
            'name' => 'Entertainment Package',
            'description' => 'Paket hiburan lengkap termasuk musik, MC, dan penampilan spesial. Tersedia berbagai pilihan tema dan gaya hiburan.',
            'price' => 10000000,
            'duration' => 8,
            'image' => 'services/entertainment.jpg',
            'category' => 'Entertainment',
            'is_available' => true
        ]);

        Service::create([
            'name' => 'Event Management',
            'description' => 'Layanan manajemen acara dari awal hingga akhir. Tim kami akan menangani perencanaan, koordinasi, dan eksekusi acara.',
            'price' => 15000000,
            'duration' => 24,
            'image' => 'services/event-management.jpg',
            'category' => 'Management',
            'is_available' => true
        ]);
    }
}

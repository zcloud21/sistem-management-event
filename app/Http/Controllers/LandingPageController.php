<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $vendors = [
            [
                'name' => 'Ethereal Decor',
                'category' => 'Dekorasi',
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1523438885209-e0793309c961?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
                'description' => 'Spesialisasi dalam menciptakan suasana pernikahan yang magis dan tak terlupakan. Dari tema rustic hingga modern-glam, Ethereal Decor mewujudkan impian Anda dengan detail yang sempurna.'
            ],
            [
                'name' => 'Royal Plate Catering',
                'category' => 'Katering',
                'rating' => 4.8,
                'image' => 'https://images.unsplash.com/photo-1551888419-8a32a5a87452?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
                'description' => 'Menyajikan hidangan istimewa dengan cita rasa premium. Royal Plate Catering berkomitmen untuk memberikan pengalaman kuliner terbaik bagi Anda dan para tamu di hari bahagia.'
            ],
            [
                'name' => 'Cinema Moments',
                'category' => 'Foto & Video',
                'rating' => 5.0,
                'image' => 'https://images.unsplash.com/photo-1519225340322-21714d938d44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
                'description' => 'Mengabadikan cerita cinta Anda melalui lensa sinematik. Tim kami menangkap setiap tawa, tangis bahagia, dan momen berharga dengan sentuhan artistik yang elegan.'
            ],
            [
                'name' => 'The Bride Story',
                'category' => 'Gaun & Rias',
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1587349407131-4a753434f8a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
                'description' => 'Temukan gaun pengantin impian yang mencerminkan kepribadian Anda. The Bride Story menawarkan koleksi gaun eksklusif dan layanan rias profesional untuk menyempurnakan penampilan Anda.'
            ],
            [
                'name' => 'The Glass House',
                'category' => 'Venue',
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1480074568708-e7b720bb3f09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80',
                'description' => 'Sebuah venue ikonik dengan arsitektur menawan dan pemandangan taman yang asri. The Glass House adalah pilihan sempurna untuk perayaan pernikahan yang intim dan elegan.'
            ],
        ];

        $events = [
            [
                'name' => 'The Wedding of Andin & Budi',
                'location' => 'The Ritz-Carlton, Jakarta',
                'image' => 'https://images.unsplash.com/photo-1597842885285-763599551b5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80'
            ],
            [
                'name' => 'Citra & Doni\'s Bali Vow',
                'location' => 'Uluwatu, Bali',
                'image' => 'https://images.unsplash.com/photo-1559204413-42800e4a3304?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80'
            ],
            [
                'name' => 'Garden Party of Eka & Fajar',
                'location' => 'GH Universal, Bandung',
                'image' => 'https://images.unsplash.com/photo-1616047006789-b7af52592324?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80'
            ],
             [
                'name' => 'The Vow of Gita & Hadi',
                'location' => 'Plataran, Bromo',
                'image' => 'https://images.unsplash.com/photo-1606800052052-a08af61486b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80'
            ],
        ];

        $packages = [
            [
                'name' => 'Silver',
                'price' => '50jt',
                'features' => ['Vendor Katering (300 pax)', 'Dekorasi Pelaminan', 'MC & Musik Akustik'],
                'is_featured' => false,
            ],
            [
                'name' => 'Gold',
                'price' => '100jt',
                'features' => ['Semua dari Silver', 'Fotografi & Videografi', 'Gaun & Makeup Pengantin'],
                'is_featured' => true,
            ],
            [
                'name' => 'Platinum',
                'price' => '200jt',
                'features' => ['Semua dari Gold', 'Wedding Organizer Full Day', 'Venue Hotel Bintang 5'],
                'is_featured' => false,
            ],
        ];

        return view('welcome', compact('vendors', 'events', 'packages'));
    }
}

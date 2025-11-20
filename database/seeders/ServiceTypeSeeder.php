<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceTypes = [
            ['name' => 'Boutonnieres & Corsages'],
            ['name' => 'Bridal'],
            ['name' => 'Catering'],
            ['name' => 'Dance & Choreography'],
            ['name' => 'Decoration & Lighting'],
            ['name' => 'Dress & Attire'],
            ['name' => 'Entertainment (DJ/MC/Music)'],
            ['name' => 'Event Rentals'],
            ['name' => 'Favors & Gifts'],
            ['name' => 'Flowers'],
            ['name' => 'Hair & Makeup'],
            ['name' => 'Health & Beauty'],
            ['name' => 'Honeymoon'],
            ['name' => 'Invitations'],
            ['name' => 'Jewelry'],
            ['name' => 'Men’s Formal Wear'],
            ['name' => 'Officiants'],
            ['name' => 'Others (Unique Services)'],
            ['name' => 'Photo booth'],
            ['name' => 'Photography'],
            ['name' => 'Sweet Corner'],
            ['name' => 'Venue'],
            ['name' => 'Videography'],
            ['name' => 'Wedding Accessories'],
            ['name' => 'Wedding Cake'],
            ['name' => 'Wedding Planning'],
            ['name' => 'Wedding Shoes'],
        ];

        foreach ($serviceTypes as $serviceType) {
            DB::table('service_types')->updateOrInsert(
                ['name' => $serviceType['name']], // kondisi untuk mencari
                ['name' => $serviceType['name']]  // nilai yang akan di-insert atau di-update
            );
        }
    }
}

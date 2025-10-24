<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super User',
            'email' => 'SuperUser@event.com',
            'password' => Hash::make('superuser123'),
            'role' => 'SuperUser',
        ]);
        User::create([
            'name' => 'Owner',
            'email' => 'owner@event.com',
            'password' => Hash::make('owner123'),
            'role' => 'Owner',
        ]);
        User::create([
            'name' => 'Admin Event',
            'email' => 'Admin@event.com',
            'password' => Hash::make('admin123'),
            'role' => 'Admin',
        ]);
        User::create([
            'name' => 'Staff',
            'email' => 'Staff@event.com',
            'password' => Hash::make('staff123'),
            'role' => 'Staff',
        ]);
        User::create([
            'name' => 'Vendor',
            'email' => 'vendorA@event.com',
            'password' => Hash::make('vendor123'),
            'role' => 'Vendor',
        ]);
        User::create([
            'name' => 'Client pengantin',
            'email' => 'client@event.com',
            'password' => Hash::make('client123'),
            'role' => 'Client',
        ]);
    }
}

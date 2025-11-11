<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanySetting;

class CompanySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or update the company settings record
        CompanySetting::updateOrCreate(
            ['id' => 1], // Using a fixed ID of 1 for the main settings
            [
                'company_name' => '',
                'company_phone' => '',
                'company_email' => '',
                'company_address' => '',
                'tax_number' => '',  // Default tax number
                'bank_account_name' => '',
                'bank_account_number' => '',
                'bank_name' => '',
            ]
        );
    }
}

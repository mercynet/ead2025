<?php

namespace Database\Seeders;

use App\Models\CountrySetting;
use Illuminate\Database\Seeder;

class CountrySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CountrySetting::factory()->count(5)->create();
    }
}

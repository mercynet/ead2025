<?php

namespace Database\Seeders;

use App\Models\CoursePrice;
use Illuminate\Database\Seeder;

class CoursePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoursePrice::factory()->count(5)->create();
    }
}

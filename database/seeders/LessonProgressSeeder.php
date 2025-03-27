<?php

namespace Database\Seeders;

use App\Models\LessonProgress;
use Illuminate\Database\Seeder;

class LessonProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LessonProgress::factory()->count(5)->create();
    }
}

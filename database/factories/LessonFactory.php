<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Lesson;
use App\Models\Module;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'namespace' => fake()->word(),
            'module_id' => Module::factory(),
            'title' => '{}',
            'description' => '{}',
            'content_type' => fake()->word(),
            'content_data' => '{}',
            'duration' => fake()->numberBetween(-10000, 10000),
            'order' => fake()->numberBetween(-10000, 10000),
            'is_published' => fake()->boolean(),
        ];
    }
}

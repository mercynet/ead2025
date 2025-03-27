<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\User;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'instructor_id' => User::factory(),
            'order' => fake()->numberBetween(-10000, 10000),
            'access_months' => fake()->numberBetween(-10000, 10000),
            'title' => '{}',
            'slug' => fake()->slug(),
            'description' => '{}',
            'short_description' => '{}',
            'level' => fake()->word(),
            'pre_requisites' => '{}',
            'target_audience' => '{}',
            'thumbnail' => fake()->word(),
            'image_cover' => fake()->text(),
            'meta_title' => '{}',
            'meta_description' => '{}',
            'is_fifo' => fake()->boolean(),
            'status' => fake()->word(),
            'published_at' => fake()->dateTime(),
            'started_at' => fake()->dateTime(),
            'finished_at' => fake()->dateTime(),
        ];
    }
}

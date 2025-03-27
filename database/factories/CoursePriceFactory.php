<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\Course;
use App\Models\CoursePrice;

class CoursePriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CoursePrice::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'country_id' => Country::factory(),
            'price_amount' => fake()->numberBetween(-10000, 10000),
            'currency_code' => fake()->regexify('[A-Za-z0-9]{3}'),
        ];
    }
}

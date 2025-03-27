<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'code' => fake()->regexify('[A-Za-z0-9]{2}'),
            'currency_code' => fake()->regexify('[A-Za-z0-9]{3}'),
            'currency_symbol' => fake()->regexify('[A-Za-z0-9]{10}'),
            'is_active' => fake()->boolean(),
            'domain' => fake()->word(),
            'locale' => fake()->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}

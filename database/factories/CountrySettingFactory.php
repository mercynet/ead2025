<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\CountrySetting;

class CountrySettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CountrySetting::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'namespace' => fake()->word(),
            'country_id' => Country::factory(),
            'key' => fake()->word(),
            'value' => fake()->text(),
        ];
    }
}

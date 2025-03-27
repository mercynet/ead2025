<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'password' => fake()->password(),
            'country_id' => Country::factory(),
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->text(),
            'avatar' => fake()->word(),
            'commission_rate' => fake()->numberBetween(-10000, 10000),
            'last_login_at' => fake()->dateTime(),
            'is_active' => fake()->boolean(),
            'remember_token' => fake()->uuid(),
        ];
    }
}

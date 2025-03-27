<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Payment;
use App\Models\User;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'namespace' => fake()->word(),
            'user_id' => User::factory(),
            'amount' => fake()->numberBetween(-10000, 10000),
            'currency' => fake()->regexify('[A-Za-z0-9]{3}'),
            'payment_method' => fake()->word(),
            'transaction_id' => fake()->word(),
            'status' => fake()->word(),
            'paid_at' => fake()->dateTime(),
        ];
    }
}

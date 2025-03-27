<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Certificate;
use App\Models\Enrollment;

class CertificateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Certificate::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'enrollment_id' => Enrollment::factory(),
            'certificate_number' => fake()->word(),
            'issued_at' => fake()->dateTime(),
            'verification_code' => fake()->word(),
        ];
    }
}

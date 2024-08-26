<?php

namespace Database\Factories;

use App\Models\CompanyFunction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyFunction>
 */
class CompanyFunctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_function' => $this->faker->jobTitle,
        ];
    }
}

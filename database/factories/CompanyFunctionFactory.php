<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\CompanyFunction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyFunction>
 */
final class CompanyFunctionFactory extends Factory
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

<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Hiring;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hiring>
 */
final class HiringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => Service::factory(),
            'hiring_date' => $this->faker->date(),
            'reference' => $this->faker->word(),
        ];
    }
}

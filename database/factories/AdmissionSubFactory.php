<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\AdmissionSub;
use App\Models\Direction;
use App\Models\Division;
use App\Models\Hiring;
use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdmissionSub>
 */
final class AdmissionSubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hiring_id' => Hiring::factory(),
            'direction_id' => Direction::factory(),
            'division_id' => Division::factory(),
            'office_id' => Office::factory(),
            'date_admission' => $this->faker->date(),
            'document' => $this->faker->word(),
        ];
    }
}

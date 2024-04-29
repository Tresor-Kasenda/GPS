<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Affectation;
use App\Models\Direction;
use App\Models\Division;
use App\Models\Hiring;
use App\Models\Office;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Affectation>
 */
final class AffectationFactory extends Factory
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
            'position_id' => Position::factory(),
            'sous_position' => $this->faker->sentence(10),
            'date_affectation' => $this->faker->date,
        ];
    }
}

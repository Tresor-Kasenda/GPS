<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Affectation;
use Illuminate\Database\Seeder;

final class AffectationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Affectation::factory()->create(3);
    }
}

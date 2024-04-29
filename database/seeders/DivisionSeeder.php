<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Division;
use Illuminate\Database\Seeder;

final class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::factory()
            ->count(3)
            ->for(Direction::factory())
            ->create();
    }
}

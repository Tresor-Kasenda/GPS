<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Direction;
use Illuminate\Database\Seeder;

final class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direction::query()->create([
            'priority' => 'D1',
            'abbreviation' => "D1",
            'designation' => "Directeur generale"
        ]);
    }
}

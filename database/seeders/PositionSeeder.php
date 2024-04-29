<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

final class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::factory()->create(20);
    }
}

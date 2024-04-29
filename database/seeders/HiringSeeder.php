<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Hiring;
use Illuminate\Database\Seeder;

final class HiringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hiring::factory()->create(3);
    }
}

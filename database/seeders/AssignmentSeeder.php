<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Assignment;
use Illuminate\Database\Seeder;

final class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assignment::factory()->create();
    }
}

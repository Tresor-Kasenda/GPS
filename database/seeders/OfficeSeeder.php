<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Office;
use Illuminate\Database\Seeder;

final class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Office::factory()
            ->count(3)
            ->for(Division::factory())
            ->create();
    }
}

<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\TransferAgent;
use Illuminate\Database\Seeder;

final class TransferAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransferAgent::factory()->create();
    }
}

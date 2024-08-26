<?php

namespace Database\Seeders;

use App\Models\TransferAgent;
use Illuminate\Database\Seeder;

class TransferAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransferAgent::factory()->create();
    }
}

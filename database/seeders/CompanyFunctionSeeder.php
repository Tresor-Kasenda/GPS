<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\CompanyFunction;
use Illuminate\Database\Seeder;

final class CompanyFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyFunctions = [
            "Autorité provinciale",
            "Chef de division chargé de finance",
            "Chef du personnel",
            "Directeur",
            "Gestionnaire",
            "Huissier",
            "Informaticien",
            "intendant",
            "Receptionniste",
            "Secretaire de direction"
        ];

        collect($companyFunctions)
            ->each(fn($companyFunction) => CompanyFunction::query()->create(['name_function' => $companyFunction]));
    }
}

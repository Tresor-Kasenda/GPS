<?php

namespace Database\Seeders;

use App\Models\CompanyFunction;
use Illuminate\Database\Seeder;

class CompanyFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyFunctions = [
            'CEO',
            'CTO',
            'CFO',
            'COO',
            'CMO',
            'CIO',
            'HR',
            'IT',
            'Sales',
            'Marketing',
            'Finance',
            'Operations',
            'Customer Service',
            'Logistics',
            'Procurement',
            'Legal',
            'Quality',
            'Research & Development',
            'Production',
            'Maintenance',
            'Health & Safety',
            'Environment',
            'Facility Management',
            'Security',
            'Training',
            'Communication',
            'Administration',
            'Other',
        ];

        collect($companyFunctions)
            ->each(fn($companyFunction) => CompanyFunction::query()->create(['name' => $companyFunction]));
    }
}

<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->createMany([
            ['name' => 'SITE PLASTICOS, S.A. C.V.'],
            ['name' => 'GRUPO IRM, S.A. C.V.'],
            ['name' => 'RETO PLASTICOS S. DE R.L. DE C.V.'],
            ['name' => 'IVM VINOS DEL MUNDO'],
            ['name' => 'ASI DE OCCIDENTE S. DE R.L. DE C.V.'],
            ['name' => 'SERVICIOS OPERATIVOS INTERNACIONALES, S.A. C.V.'],
        ]);
    }
}

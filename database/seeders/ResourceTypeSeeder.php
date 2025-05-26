<?php

namespace Database\Seeders;

use App\Models\ResourceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResourceType::factory()->createMany([
            ['description' => 'Video'],
            ['description' => 'PDF'],
            ['description' => 'Presentación'],
            ['description' => 'URL'],
        ]);
    }
}

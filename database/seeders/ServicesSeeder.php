<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Tinte de Cabello',
            'duration' => 180,
        ]);

        Service::create([
            'name' => 'Corte de Cabello',
            'duration' => 30,
        ]);

        Service::create([
            'name' => 'Maquillaje',
            'duration' => 40,
        ]);

    }
}

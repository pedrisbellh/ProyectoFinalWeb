<?php

namespace Database\Seeders;

use App\Models\Recurso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recurso::create([
            'categoria' => 'Libreta',
            'cantidad' => '200',
            'disponibilidad' => 'disponible',
        ]);

        Recurso::factory(20)->create();
    }
}

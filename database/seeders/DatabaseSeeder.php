<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Livewire\Recursos;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Pedrisbel',
            'email' => 'admin@gmail.com',
            'rol' => 'vicedecano',
            'password' => Hash::make('12345678'),
        ]);

        User::factory(20)->create();

    }
}

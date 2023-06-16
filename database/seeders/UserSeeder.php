<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Vicedecano',
            'email'=>'vicedecano@gmail.cu',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}

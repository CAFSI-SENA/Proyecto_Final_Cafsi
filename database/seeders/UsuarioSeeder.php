<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Deivy Rodriguez',
            'email' => 'deivy1708@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('SuperAdmin');

        User::create([
            'name' => 'Michael Duque',
            'email' => 'michael@gmail.com',
            'password' => bcrypt('987654321')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Carlos Ramirez',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('987654321')
        ])->assignRole('Auxiliar');

        User::factory(20)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alfredo Gonzalez',
            'email' => 'marencocode@gmail.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Javier Gutierrez',
            'email' => 'jgutierrez@grupodomen.com',
            'password' => bcrypt('password')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Sin Asignar',
            'email' => 'sinasignar@grupodomen.com',
            'password' => bcrypt('cjaf0322:$')
        ])->assignRole('Vendedor');

        /* User::factory(30)->create(); */
    }
}

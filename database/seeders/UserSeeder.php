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
            'email' => 'dev@agenciavandu.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('SuperUser');

        User::create([
            'name' => 'Alvar Buenfil',
            'email' => 'ab@agenciavandu.com',
            'password' => bcrypt('password')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'SinAsignar',
            'email' => 'info@agenciavandu.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('Vendedor');

        /* User::factory(30)->create(); */
    }
}

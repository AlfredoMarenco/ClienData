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
            'email' => 'alfredomarenco@boletea.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Alfredo Gonzalez',
            'email' => 'vendedor@boletea.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('Vendedor');

        User::factory(30)->create();
    }
}

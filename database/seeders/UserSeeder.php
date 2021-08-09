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
            'email' => 'alfredogonzalez@terrenosmid.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Javier Gutierrez',
            'email' => 'javiergutierrez@terrenosmid.com',
            'password' => bcrypt('password')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Alfredo Gonzalez',
            'email' => 'vendedor@terrenosmid.com',
            'password' => bcrypt('marencos6359:D')
        ])->assignRole('Vendedor');

        User::factory(30)->create();
    }
}

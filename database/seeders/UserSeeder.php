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
        ]);

        User::factory(30)->create();
    }
}

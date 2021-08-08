<?php

namespace Database\Seeders;

use App\Models\Development;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Development::factory(5)->create(); */

        Development::create([
            'name' => 'Ciudad Central'
        ]);

        Development::create([
            'name' => 'Alea'
        ]);
        Development::create([
            'name' => 'Andarenas'
        ]);

        Development::create([
            'name' => 'Palumar'
        ]);

        Development::create([
            'name' => 'Costa linda'
        ]);
    }
}

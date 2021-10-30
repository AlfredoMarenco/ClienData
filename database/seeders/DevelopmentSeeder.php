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
            'name' => 'Desarrollo Web'
        ]);

    }
}

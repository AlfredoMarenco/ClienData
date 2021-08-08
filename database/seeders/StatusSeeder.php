<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Status::factory(5)->create(); */

        Status::create([
            'name' => 'Lead caliente',
            'color_bg' => '#FF0000',
            'color_text' => '#FFFFFF'
        ]);

        Status::create([
            'name' => 'Lead templado',
            'color_bg' => '#FF7033',
            'color_text' => '#FFFFFF'
        ]);

        Status::create([
            'name' => 'Lead frio',
            'color_bg' => '#00B3FF',
            'color_text' => '#FFFFFF'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'code' => '1234',
            'name' => 'Alfredo',
            'last_name' => 'Silva',
            'email' => 'alfredosilva.terrenosmid@gmail.com']);

    }
}

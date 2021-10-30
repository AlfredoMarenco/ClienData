<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'Administrador'
        ]);

        $role2 = Role::create([
            'name' => 'Vendedor'
        ]);

        $role3 = Role::create([
            'name' => 'SuperUser'
        ]);



        Permission::create(['name' => 'admin.leads.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.leads.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.leads.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.leads.destory'])->syncRoles([$role3]);

        Permission::create(['name' => 'admin.statuses.index'])->syncRoles([$role1,$role3]);
        Permission::create(['name' => 'admin.statuses.create'])->syncRoles([$role1,$role3]);
        Permission::create(['name' => 'admin.statuses.edit'])->syncRoles([$role1,$role3]);
        Permission::create(['name' => 'admin.statuses.destory'])->syncRoles([$role1,$role3]);


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // admin
        Permission::create(['name' => 'create loan']);
        Permission::create(['name' => 'delete loan']);
        Permission::create(['name' => 'edit loan']);
        Permission::create(['name' => 'select approver']);
        Permission::create(['name' => 'choose driver']);
        Permission::create(['name' => 'choose vehicle']);

        // approver
        Permission::create(['name' => 'approve loan lv 1']);
        Permission::create(['name' => 'approve loan lv 2']);

        // create role
        Role::create(['name' => 'admin'])->givePermissionTo(['create loan', 'delete loan', 'edit loan', 'select approver', 'choose driver', 'choose vehicle']);

        Role::create(['name' => 'approver_lv_1'])->givePermissionTo(['approve loan lv 1']);

        Role::create(['name' => 'approver_lv_2'])->givePermissionTo(['approve loan lv 2']);
    }
}

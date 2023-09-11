<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminAndApproverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@sch39.dev',
                'password' => bcrypt('root'),
            ],
            [
                'id' => 2,
                'username' => 'approver 1',
                'email' => 'approver1@sch39.dev',
                'password' => bcrypt('root'),
            ],
            [
                'id' => 3,
                'username' => 'approver 2',
                'email' => 'approver2@sch39.dev',
                'password' => bcrypt('root'),
            ],
            [
                'id' => 4,
                'username' => 'approver 3',
                'email' => 'approver3@sch39.dev',
                'password' => bcrypt('root'),
            ],
            [
                'id' => 5,
                'username' => 'approver 4',
                'email' => 'approver4@sch39.dev',
                'password' => bcrypt('root'),
            ],
        ];

        User::insert($users);
        // admin
        User::find(1)->syncRoles(['admin']);
        // approver lv 1
        User::find(2)->syncRoles(['approver'])->givePermissionTo(['approve loan lv 1']);
        User::find(3)->syncRoles(['approver'])->givePermissionTo(['approve loan lv 1']);

        // approver lv 2
        User::find(2)->syncRoles(['approver'])->givePermissionTo(['approve loan lv 2']);
        User::find(3)->syncRoles(['approver'])->givePermissionTo(['approve loan lv 2']);
    }
}

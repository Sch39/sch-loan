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
                'password' => 'root',
            ],
            [
                'id' => 2,
                'username' => 'approver 1',
                'email' => 'approver1@sch39.dev',
                'password' => 'root',
            ],
            [
                'id' => 3,
                'username' => 'approver 2',
                'email' => 'approver2@sch39.dev',
                'password' => 'root',
            ],
            [
                'id' => 4,
                'username' => 'approver 3',
                'email' => 'approver3@sch39.dev',
                'password' => 'root',
            ],
            [
                'id' => 5,
                'username' => 'approver 4',
                'email' => 'approver4@sch39.dev',
                'password' => 'root',
            ],
        ];

        $user_added = User::insert($users);
        // admin
        $user_added->findOrFail(1)->syncRoles(['admin']);
        // approver lv 1
        $user_added->findOrFail(2)->syncRoles(['approver_lv_1']);
        $user_added->findOrFail(3)->syncRoles(['approver_lv_1']);
        // approver lv 2
        $user_added->findOrFail(2)->syncRoles(['approver_lv_2']);
        $user_added->findOrFail(3)->syncRoles(['approver_lv_2']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\LoanStatuses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'id' => 1,
                'name' => 'Approver 1 Processing'
            ],
            [
                'id' => 2,
                'name' => 'Approver 1 Approved'
            ],
            [
                'id' => 3,
                'name' => 'Approver 1 Rejected'
            ],
            [
                'id' => 4,
                'name' => 'Approver 2 Processing'
            ],
            [
                'id' => 5,
                'name' => 'Approver 2 Approved'
            ],
            [
                'id' => 6,
                'name' => 'Approver 2 Rejected'
            ],
            [
                'id' => 7,
                'name' => 'Loan Approved'
            ],
            [
                'id' => 8,
                'name' => 'Loan Rejected'
            ],
        ];

        LoanStatuses::insert($statuses);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;


class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criteria = [
            [
                'id'         => 1,
                'name'       => 'Test 1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 2,
                'name' => 'Test 2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 3,
                'name' => 'Test 3',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 4,
                'name' => 'Test 4',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 5,
                'name' => 'Test 5',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        Criteria::insert($criteria);
    }
}

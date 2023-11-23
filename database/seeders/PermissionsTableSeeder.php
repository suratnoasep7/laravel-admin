<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'category_create',
            ],
            [
                'id'    => 2,
                'title' => 'category_edit',
            ],
            [
                'id'    => 3,
                'title' => 'category_show',
            ],
            [
                'id'    => 4,
                'title' => 'category_delete',
            ],
            [
                'id'    => 5,
                'title' => 'category_access',
            ],
            [
                'id'    => 6,
                'title' => 'product_create',
            ],
            [
                'id'    => 7,
                'title' => 'product_edit',
            ],
            [
                'id'    => 8,
                'title' => 'product_show',
            ],
            [
                'id'    => 9,
                'title' => 'product_delete',
            ],
            [
                'id'    => 10,
                'title' => 'product_access',
            ],
            [
                'id'    => 11,
                'title' => 'criteria_create',
            ],
            [
                'id'    => 12,
                'title' => 'criteria_edit',
            ],
            [
                'id'    => 13,
                'title' => 'criteria_show',
            ],
            [
                'id'    => 14,
                'title' => 'criteria_delete',
            ],
            [
                'id'    => 15,
                'title' => 'criteria_access',
            ],
            [
                'id'    => 16,
                'title' => 'brand_create',
            ],
            [
                'id'    => 17,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 18,
                'title' => 'brand_show',
            ],
            [
                'id'    => 19,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 20,
                'title' => 'brand_access',
            ]
        ];

        Permission::insert($permissions);
    }
}

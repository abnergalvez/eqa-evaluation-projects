<?php

namespace Database\Seeders;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'admin_access',
            ],
            [
                'id'    => 2,
                'title' => 'manager_access',
            ],
            [
                'id'    => 3,
                'title' => 'evaluator_access',
            ],
            [
                'id'    => 4,
                'title' => 'institution_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

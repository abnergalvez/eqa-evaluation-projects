<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        
        $manager_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 6) != 'admin_';
        });
        Role::findOrFail(2)->permissions()->sync($manager_permissions);

        Role::findOrFail(3)->permissions()->sync(3);
        Role::findOrFail(4)->permissions()->sync(4);
    }
}

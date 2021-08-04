<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);
        Permission::create(['name' => 'publish product']);
        Permission::create(['name' => 'unpublish product']);

        $role1 = Role::create(['name' => 'user']);

        $role2 = Role::create(['name' => 'company']);
        $role2->givePermissionTo('edit product');
        $role2->givePermissionTo('delete product');
        $role2->givePermissionTo('publish product');
        $role2->givePermissionTo('delete product');
    }
}

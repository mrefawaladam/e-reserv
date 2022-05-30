<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'dashboard']);
        Permission::create(['name' => 'user.management']);
        Permission::create(['name' => 'role.permission.management']);
        Permission::create(['name' => 'menu.management']);

        //user
        Permission::create(['name' => 'user.index']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.destroy']);
        Permission::create(['name' => 'user.import']);
        Permission::create(['name' => 'user.export']);
 
        //role
        Permission::create(['name' => 'role.index']);
        Permission::create(['name' => 'role.create']);
        Permission::create(['name' => 'role.edit']);
        Permission::create(['name' => 'role.destroy']);
        Permission::create(['name' => 'role.import']);
        Permission::create(['name' => 'role.export']);

        //table
        Permission::create(['name' => 'table.index']);
        Permission::create(['name' => 'table.create']);
        Permission::create(['name' => 'table.edit']);
        Permission::create(['name' => 'table.destroy']); 

        //menu
        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'menu.create']);
        Permission::create(['name' => 'menu.edit']);
        Permission::create(['name' => 'menu.destroy']); 

        //payment
        Permission::create(['name' => 'payment.index']);
        Permission::create(['name' => 'payment.create']);
        Permission::create(['name' => 'payment.edit']);
        Permission::create(['name' => 'payment.destroy']); 
        
        //transaction
        Permission::create(['name' => 'transaction.index']);
        Permission::create(['name' => 'transaction.create']);
        Permission::create(['name' => 'transaction.edit']);
        Permission::create(['name' => 'transaction.destroy']); 
        
        //permission
        Permission::create(['name' => 'permission.index']);
        Permission::create(['name' => 'permission.create']);
        Permission::create(['name' => 'permission.edit']);
        Permission::create(['name' => 'permission.destroy']);
        Permission::create(['name' => 'permission.import']);
        Permission::create(['name' => 'permission.export']);

        //assignpermission
        Permission::create(['name' => 'assign.index']);
        Permission::create(['name' => 'assign.create']);
        Permission::create(['name' => 'assign.edit']);
        Permission::create(['name' => 'assign.destroy']);

        //assingusertorole
        Permission::create(['name' => 'assign.user.index']);
        Permission::create(['name' => 'assign.user.create']);
        Permission::create(['name' => 'assign.user.edit']);
 

        // create roles 
        $roleUser = Role::create(['name' => 'user']);
        $roleUser->givePermissionTo([
            'dashboard',
            'user.management',
            'user.index',
        ]);

        // create roles 
        $roleUser = Role::create(['name' => 'staf']);
        $roleUser->givePermissionTo([
            'dashboard',
            'user.management',
            'user.index',
        ]);


        // create Super Admin
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        //assign user id 1 ke super admin
        $user = User::find(1);
        $user->assignRole('super-admin');
        $user = User::find(2);
        $user->assignRole('user');
        $user = User::find(3);
        $user->assignRole('staf');
    }
}

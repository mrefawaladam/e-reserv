<?php

namespace Database\Seeders;

use App\Models\MenuGroup;
use Illuminate\Database\Seeder;

class MenuGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // MenuGroup::factory()->count(5)->create();
        MenuGroup::insert(
            [
                [
                    'name' => 'Dashboard',
                    'icon' => 'fas fa-tachometer-alt',
                    'permission_name' => 'dashboard',
                ],
                [
                    'name' => 'Users Management',
                    'icon' => 'fas fa-users',
                    'permission_name' => 'user.management',
                ],
                [
                    'name' => 'Role Management',
                    'icon' => 'fas fa-user-tag',
                    'permisison_name' => 'role.permission.management',
                ], 
                [
                    'name' => 'Menu Management',
                    'icon' => 'fas fa-bars',
                    'permisison_name' => 'menu.management',
                ],
                [
                    'name' => 'Table Management',
                    'icon' => 'fas fa-bars',
                    'permisison_name' => 'table.index',
                ],  
                [
                    'name' => 'Payment Management',
                    'icon' => 'fas fa-bars',
                    'permisison_name' => 'payment.index',
                ],
            

                [
                    'name' => 'Transaction Management',
                    'icon' => 'fas fa-bars',
                    'permisison_name' => 'transaction-prcess.index',
                ],
                [
                    'name' => 'Food Management',
                    'icon' => 'fas fa-bars',
                    'permisison_name' => 'menu.index',
                ],
                [
                    'name' => 'History Transaction',
                    'icon' => 'fas fa-bars',
                    'permisison_name' => 'history-user.index',
                ], 
            ]
        );
    }
}

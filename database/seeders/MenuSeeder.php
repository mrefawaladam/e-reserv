<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert(
            [
                [
                    'name' => 'Batagor',
                    'user_id' => '1',
                    'status' => 'available',
                    'qty' => '5',

                ],
                [
                    'name' => 'Expresso',
                    'user_id' => '1',
                    'status' => 'available',
                    'qty' => '5',

                ],
                [
                    'name' => 'Latte',
                    'user_id' => '1',
                    'status' => 'available',
                    'qty' => '5',

                ],
                [
                    'name' => 'Capucino',
                    'user_id' => '1',
                    'status' => 'available',
                    'qty' => '5',

                ],
                
            ]
        );
    }
}

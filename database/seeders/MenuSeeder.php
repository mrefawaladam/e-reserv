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
                    'price' => '30000',
                    'status' => 'available',
                    'description' => 'available',
                    'qty' => '5',

                ],
                [
                    'name' => 'Espresso',
                    'user_id' => '1',
                    'price' => '20000',
                    'status' => 'available',
                    'description' => 'available',
                    'qty' => '5',

                ],
                [
                    'name' => 'Latte',
                    'user_id' => '1',
                    'price' => '15000',
                    'status' => 'available',
                    'qty' => '5',
                    'description' => 'available',

                ],
                [
                    'name' => 'Capucino',
                    'user_id' => '1',
                    'price' => '25000',
                    'status' => 'available',
                    'qty' => '5',
                    'description' => 'available',


                ],

            ]
        );
    }
}

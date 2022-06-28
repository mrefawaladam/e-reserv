<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::insert(
            [
                [
                    'name' => '1',
                    'status' => 'Paid off',
                    'barcode' => '123',

                ],
                [
                    'name' => '2',
                    'status' => 'Paid off',
                    'barcode' => '456',

                ],

                [
                    'name' => '3',
                    'status' => 'Paid off',
                    'barcode' => '789',

                ],

                [
                    'name' => '4',
                    'status' => 'Paid off',
                    'barcode' => '321',

                ],
                [
                    'name' => '5',
                    'status' => 'Paid off',
                    'barcode' => '654',

                ],



            ]
        );
        }
    }

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Photo::insert(
        [
            [
                'file_path' => 'img1.jpg',
                'menu_id' => '1', 

            ],
            [
                'file_path' => 'img1.jpg',
                'menu_id' => '1', 

            ],
            
            [
                'file_path' => 'img1.jpg',
                'menu_id' => '2', 

            ],
            
            [
                'file_path' => 'img1.jpg',
                'menu_id' => '3', 

            ],
            [
                'file_path' => 'img1.jpg',
                'menu_id' => '4', 

            ],
            
            
            
        ]
    );
    }
}

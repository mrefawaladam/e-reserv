<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::insert(
            [
                [
                    'method' => 'Cash',
                    'file_path' => 'img2.jpg',
                ],
                [
                    'method' => 'QRCode',
                    'file_path' => 'img2.jpg',
                ],
                [
                    'method' => 'Cash',
                    'file_path' => 'img2.jpg',
                ],
                [
                    'method' => 'QRCode',
                    'file_path' => 'img2.jpg',
                ],
                [
                    'method' => 'Cash',
                    'file_path' => 'img2.jpg',
                ],
            ]
        );
    }
}

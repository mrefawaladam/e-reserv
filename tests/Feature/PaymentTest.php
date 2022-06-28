<?php

namespace Tests\Feature;

use App\Models\Payment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_bisa_lihat_halaman_daftar_payment()
    {
        //seed db
        $this->seed();
        $response = $this->get("/payment");
        $response->assertStatus(200);
        $response->assertSeeText("Method");
        $response->assertSeeText("File Path");

    }
}

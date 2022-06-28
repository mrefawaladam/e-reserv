<?php

namespace Tests\Feature;

use App\Models\Cart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_bisa_lihat_halaman_daftar_cart()
    {
        //seed db
        $this->seed();
        $response = $this->get("/cart");
        $response->assertStatus(200);
        $response->assertSeeText("Photos");
        $response->assertSeeText("Name");
        $response->assertSeeText("Quantity");
        $response->assertSeeText("Price");
    }
}

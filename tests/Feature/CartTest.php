<?php

namespace Tests\Feature;

use App\Models\User;
use Darryldecode\Cart\Cart;
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
    public function test_user_can_open_cart()
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

    public function test_delete_cart()
    {
        $cart = \Cart::add([
            'id' => '1',
            'name' => 'batagor',
            'price' => '30000',
            'quantity' => '1',
            'attributes' => array(
                'image' => 'img1.jpg'
            )
        ]);

        $response = $this->delete("/remove");
        $response->assertStatus(405);
    }
}

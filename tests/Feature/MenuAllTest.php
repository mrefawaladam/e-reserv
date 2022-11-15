<?php

namespace Tests\Feature;

use App\Models\MenuAll;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Menu;
use Tests\TestCase;

class MenuAllTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_open_menu()
    {
        // seed db
        $this->seed();
        $response = $this->get("/menu-all");
        $response->assertStatus(200);
        $response->assertSeeText("MENU LIST");

        $response->assertSeeText("Batagor");
        $response->assertSeeText("Rp30000");
        $response->assertSeeText("available");

        $response->assertSeeText("Espresso");
        $response->assertSeeText("Rp20000");
        $response->assertSeeText("available");

        $response->assertSeeText("Latte");
        $response->assertSeeText("Rp15000");
        $response->assertSeeText("available");

        $response->assertSeeText("Capucino");
        $response->assertSeeText("Rp25000");
        $response->assertSeeText("available");
    }
}




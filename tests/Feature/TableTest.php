<?php

namespace Tests\Feature;

use App\Models\Table;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TabletTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_bisa_lihat_halaman_daftar_table()
    {
        //seed db
        $this->seed();
        $response = $this->get("/cart");
        $response->assertStatus(200);
        $response->assertSeeText("No");
        $response->assertSeeText("Photos");
        $response->assertSeeText("Name");
        $response->assertSeeText("Quantity");
        $response->assertSeeText("Price");
    }
}

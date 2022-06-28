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
    public function test_user_bisa_lihat_halaman_daftar_menuAll()
    {
        //seed db
        $this->seed();
        $response = $this->get("/menu-all");
        $response->assertStatus(200);
        $response->assertSeeText("MENU LIST");

        $response = $this->get('/');


    }
}




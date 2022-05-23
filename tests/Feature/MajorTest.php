<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Major;
use App\Models\User;


class MajorTest extends TestCase
{
    use RefreshDatabase;
   
    /**
     * A basic feature test example.
     *
     * @return void
     */
 
    public function test_create_major()
    { 
        $this->seed();
        $this->actingAs(User::find(1)->first());
       
        $response = $this->post('/major',["name_major" => "RPL"]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect("/major");
        $search = $this->get("/major", [
            "name_major" => "RPL",
        ]);

        $this->assertDatabaseHas('majors', [
            "name_major" => "RPL" 
        ]);
    }

    public function test_update_major()
    { 
        $this->seed();
        $this->actingAs(User::find(1)->first());
        $response = $this->post('/major',["name_major" => "RPL"]);

        $response = $this->put(
            '/major/1',
            [
                "name_major" => "RPLS"
            ]
        );
        $response->assertSessionHasNoErrors(); 
        $response->assertRedirect("/major");

        $search = $this->get("/major", [
            "name_major" => "RPLS",
        ]);

        $this->assertDatabaseHas('majors', [
            "name_major" => "RPLS" 
        ]);
        
        $response->assertSessionHasNoErrors();

        
    }

    public function test_delete_major()
    { 
        $this->seed();
        $this->actingAs(User::find(1)->first());

        $response = $this->delete('/major/1');
        $response->assertSessionHasNoErrors();

    }
    
}

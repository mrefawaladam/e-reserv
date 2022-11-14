<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {
        $response = $this->post('/register',[
            'name' => 'Berryl Radian',
            'email' => 'berryl@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertValid(['Employee Added Successfully']);
    }

    public function test_name_is_required()
    {
        $response = $this->post('/register',[
            'name' => '',
            'email' => 'berryl@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->$this->assertInvalid(['name']);
    }

    public function test_email_is_required()
    {
        $response = $this->post('/register',[
            'name' => 'Berryl Radian',
            'email' => '',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->$this->assertInvalid(['email']);
    }

    public function test_email_not_valid()
    {
        $response = $this->post('/register',[
            'name' => 'Berryl Radian',
            'email' => 'berryl.email.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->$this->assertInvalid(['email']);
    }

    public function test_password_is_required()
    {
        $response = $this->post('/register',[
            'name' => 'Berryl Radian',
            'email' => 'berryl.email.com',
            'password' => '',
            'password_confirmation' => ''
        ]);

        $response->$this->assertInvalid(['password']);
    }

    public function test_password_confirmation_is_required()
    {
        $response = $this->post('/register',[
            'name' => 'Berryl Radian',
            'email' => 'berryl.email.com',
            'password' => 'password',
            'password_confirmation' => ''
        ]);

        $response->$this->assertInvalid(['password_confirmation']);
    }

    public function test_password_confirmation_not_same()
    {
        $response = $this->post('/register',[
            'name' => 'Berryl Radian',
            'email' => 'berryl.email.com',
            'password' => 'password',
            'password_confirmation' => 'password2'
        ]);

        $response->$this->assertInvalid(['password_confirmation']);
    }
}

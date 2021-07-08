<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UsersTest extends TestCase
{
        use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function un_usuario_puede_crear_usuarios()
    {
        $this ->withoutExceptionHandLing();

        $data = [
            'name' => 'jeff',
            'email' => 'jeff@gmail.com',
            'password' => '1235'
        ];

        $resp = $this->post('/users', $data);

        $this->assertDatabaseCount('users',1);

        $this -> assertDatabaseHas ('users', $data);
       
        
    }
}

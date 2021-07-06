<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Declaracion;
use App\Models\User;

class DeclaracionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function un_usuario_puede_crear_declaraciones()
    {
        $this ->withoutExceptionHandLing();
        
        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'id_jornada' => '12539',
        
            
        ];

        $resp = $this->post('/declaracions', $data);

       $this->assertTrue(Declaracion::where('id_jornada',$data['id_jornada'])->exists());
       
        
    }
}

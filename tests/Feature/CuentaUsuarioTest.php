<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\CuentaUsuario;
use App\Models\User;

class CuentaUsuarioTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function un_usuario_puede_crear_cuentas()
    {
        $this ->withoutExceptionHandLing();
        
        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'correo' => 'jeff@gmail.com',
            'contraseña' => '1234a',
            
        ];

        $resp = $this->post('/cuenta_usuarios', $data);

       $this->assertTrue(CuentaUsuario::where('correo',$data['correo'])->exists());
       
        
    }

    

    
}

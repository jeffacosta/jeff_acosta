<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Persona;
class TelefonoTest extends TestCase
{
 
    use RefreshDatabase;

      /** @test */
      public function un_contacto_requiere_telefono()
      {
         //$this ->withoutExceptionHandLing();
 
         
         $user = Persona::factory()->create();
 
         $this->actingAs($user);
 
         $data = [
             'persona_id' => '',
           
             
         ];
 
         $resp = $this->post('/telefonos', $data);
 
        
        $resp-> assertSessionHasErrors(['numerotelefono']);
         
      }
}

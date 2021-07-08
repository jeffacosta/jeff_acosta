<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Declaracion;
class ValidacionTest extends TestCase
{
    use RefreshDatabase;

      /** @test */
      public function un_contacto_requiere_telefono()
      {
         //$this ->withoutExceptionHandLing();
 
         
         $user = Declaracion::factory()->create();
 
         $this->actingAs($user);
 
         $data = [
             'declaracion_id' => '145151',
             'id_firma'  => '145151',
            
             'departamento'=> 'ciencias',
           
             
         ];
 
         $resp = $this->post('/validacions', $data);
 
        
        $resp-> assertSessionHasErrors(['validacion']);
         
      }
}

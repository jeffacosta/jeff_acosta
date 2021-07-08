<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Persona;
use App\Models\User;

class PersonaTest extends TestCase
{
    use RefreshDatabase;
  
    /** @test */
    public function una_persona_requiere_nombre()
    {
       //$this ->withoutExceptionHandLing();

       $user = User::factory()->create();

       $this->actingAs($user);

       $data = [
           'nombre' => '',
           'primerApellido' => 'Aleman',
           'segundoApellido' => 'Alfaro',
           'unidadAcademica' => 'Director',
       ];

       $resp = $this->post('/personas', $data);
      
      $resp-> assertSessionHasErrors(['nombre']);
       
    }
}

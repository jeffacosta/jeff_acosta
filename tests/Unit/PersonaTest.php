<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersonaTest extends TestCase
{
    
    use RefreshDatabase;

    /** @test */
    
    public function Un_Persona_Es_Usuario()
    {
        $persona = Persona::factory() -> create();

        
       $this->assertInstanceOf(User::class, $persona -> user);
    }
}

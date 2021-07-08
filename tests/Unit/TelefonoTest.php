<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Persona;
use App\Models\Telefono;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TelefonoTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function Una_Persona_Tiene_Telefonos()
    {
        
        $telefono = Telefono::factory() -> create();

       $this-> assertInstanceOf(Persona::class, $telefono->persona);
    }
}

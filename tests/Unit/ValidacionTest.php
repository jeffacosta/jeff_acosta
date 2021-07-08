<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Declaracion;
use App\Models\Validacion;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ValidacionTest extends TestCase
{

    use RefreshDatabase;
    
    /** @test */
    public function Una_Declaracion_Tiene_Validacion()
    {
        $validacion = Validacion::factory() -> create();
        
       $this-> assertInstanceOf(Declaracion::class, $validacion->declaracion);
    }
}

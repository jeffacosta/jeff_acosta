<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Declaracion;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeclaracionTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function Un_Usuario_Tiene_Una_Declaracion()
    {
        $declaracion = Declaracion::factory() -> create();

        $this-> assertInstanceOf(User::class, $declaracion->user);
    }
}

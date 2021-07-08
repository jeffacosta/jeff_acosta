<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\CuentaUsuario;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CuentaUsuarioTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function Un_Usuario_Tiene_Una_Cuenta()
    {
        $cuentausuario = CuentaUsuario::factory() -> create();
        $this-> assertInstanceOf(User::class, $cuentausuario->user);
    }
}

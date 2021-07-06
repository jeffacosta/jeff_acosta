<?php

namespace Tests\Unit;
use App\Models\User;
use App\Models\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
class UserTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function Un_Usuario_Tiene_Casa()
    {
        $user = User::factory() -> create();

       $SitieneCasa = $user->TieneCasa();

       $this->assertTrue($SitieneCasa);
    }

    /** @test */
    public function Un_Usurio_Tiene_Muchos_Contactos()
    {
        
        $User = User::factory() -> create();

        
       $this->assertInstanceOf(Collection::class, $User -> contacts);
    }
}

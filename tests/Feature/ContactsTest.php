<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;
use App\Models\User;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function un_usuario_puede_crear_contactos()
    {
        $this ->withoutExceptionHandLing();
        
        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => 'contacto',
            'phone' => '165282',
            
        ];

        $resp = $this->post('/contacts', $data);

       $this->assertTrue(Contact::where('name',$data['name'])->exists());
       
        
    }

     /** @test */
     public function un_contacto_requiere_nombre()
     {
        //$this ->withoutExceptionHandLing();

        
        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => '',
            'phone' => '165282',
            
        ];

        $resp = $this->post('/contacts', $data);

       
       $resp-> assertSessionHasErrors(['name']);
        
     }
        /** @test */
     public function un_contacto_requiere_telefono()
     {
       // $this ->withoutExceptionHandLing();

        $user = User::factory()->create();

        $this->actingAs($user);

        $data = [
            'name' => '',
            
            
        ];

        $resp = $this->post('/contacts', $data);

       
       $resp-> assertSessionHasErrors(['phone']);
        
     }
}

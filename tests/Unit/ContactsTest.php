<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;

    /** @test */
    public function Un_Contacto_Pertence_Usuario()
    {
        
        $contact = Contact::factory() -> create();

       
        
       $this-> assertInstanceOf(User::class, $contact->user);
    }
}

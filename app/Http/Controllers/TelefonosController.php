<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Telefono;

class TelefonosController extends Controller
{
    public function store()
    {
        $data = $this->validate(request(), [
            'numerotelefono'=>'required',
            
        ]);

        auth()->user()->telefonos()->create($data);
    }
}

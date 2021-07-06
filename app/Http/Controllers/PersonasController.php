<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function store ()
    {

        $data = $this->validate(request(), [
            'nombre'=>'required',
            'primerApellido'=>'required',
            'segundoApellido'=>'required',
            'unidadAcademica'=>'required'
        ]);

        auth()->user()->personas()->create($data);
    }
}

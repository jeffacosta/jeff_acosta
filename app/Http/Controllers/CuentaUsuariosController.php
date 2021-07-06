<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CuentaUsuario;

class CuentaUsuariosController extends Controller
{

    public function store ()
    {
        $data = $this->validate(request(), [
            'correo'=>'required',
            'contraseña'=>'required'
        ]);

        auth()->user()->cuenta_usuarios()->create($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validacion;
use App\Models\Declaracion;

class ValidacionsController extends Controller
{
    public function store()
    {
        $data = $this->validate(request(), [
            
            'id_firma'=>'required',
        'validacion'=>'required',
        'departamento'=>'required',
            
        ]);

        auth()->user()->validacions()->create($data);
    }
}

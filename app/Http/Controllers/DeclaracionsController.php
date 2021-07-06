<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Declaracion;

class DeclaracionsController extends Controller
{
    public function store ()
    {
        $data = $this->validate(request(), [
            'id_jornada'=>'required',
           
        ]);

        auth()->user()->declaracions()->create($data);
    }
}

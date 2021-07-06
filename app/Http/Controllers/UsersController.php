<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

 class UsersController extends Controller
{
    
    public function store()
    {
        $data = request () ->all();

        User:: create($data);

    }

}

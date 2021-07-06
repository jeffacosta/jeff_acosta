<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CuentaUsuario extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'correo',
        'contraseña',
      
    ];

    public function user ()
    {
        return $this-> belongsTo(User::class);
    }
}

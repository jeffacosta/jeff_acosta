<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Telefono extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'persona_id',
        'numerotelefono',
    
        
    ];

    public function persona ()
    {
        return $this-> belongsTo(Persona::class);
    }
}

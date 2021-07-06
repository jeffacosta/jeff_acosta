<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Telefono;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Persona extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre',
        'primerApellido',
        'segundoApellido',
        'unidadAcademica',
        
    ];

    public function Tiene_Nombre ()
    {
        return $this -> Create(Persona::class);
    }

    public function user ()
    {
        return $this-> belongsTo(User::class);
    }

    public function telefonos(){
        
        return $this-> hasMany(Telefono::class);

    } 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Validacion extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id_declaracion',
        'id_firma',
        'validacion',
        'departamento',
    ];

    public function declaracion ()
    {
        return $this-> belongsTo(Declaracion::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Validacion;
class Declaracion extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'id_jornada',
    
    ];

    public function user ()
    {
        return $this-> belongsTo(User::class);
    }

    public function validacions(){
        
        return $this-> hasMany(Validacion::class);

    } 
}

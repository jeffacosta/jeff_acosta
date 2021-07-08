<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Contact;
use App\Models\Persona;
use App\Models\CuentaUsuario;
use App\Models\Declaracion;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function TieneCasa(){
        return true;

    }

    public function personas(){
        
        return $this-> hasOne(Persona::class);

    } 

    public function cuenta_usuarios(){
        
        return $this-> hasOne(CuentaUsuario::class);

    } 


    public function contacts(){
        
        return $this-> hasOne(Contact::class);

    } 

    public function declaracions(){
        
        return $this-> hasMany(Declaracion::class);

    }
}

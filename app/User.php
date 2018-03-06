<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'idUnidad', 'nombres',  'primerAp', 'segundoAp', 'email', 'password', 'numFiscal', 'nivel',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function carpetas()
    {
        return $this->hasMany('App\Models\Carpeta');
    }

    public function unidad()
    {
        return $this->belongsTo('App\Models\Unidad');
    }
}

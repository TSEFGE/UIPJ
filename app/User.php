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
        'id', 'idUnidad', 'username', 'nombres',  'apellidos', 'email', 'password', 'numFiscal', 'nivel','tokenSession',
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
    public function bitacoras()
    {

    return $this-> hasMany('App\Models\Bitacora');
    }


}

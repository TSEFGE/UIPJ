<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    protected $table = 'auxiliares';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'idFiscal', 'nombres', 'primerAp',  'segundoAp', 'email', 'telefono', 'password', 'tokenSession',
    ];
}

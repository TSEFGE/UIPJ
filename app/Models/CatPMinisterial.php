<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatPMinisterial extends Model
{
    public $table = 'cat_pministerial';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre'
    ];
}

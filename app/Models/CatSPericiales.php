<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSPericiales extends Model
{
    public $table = 'cat_spericiales';

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

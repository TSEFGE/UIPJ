<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatModalidad extends Model
{
    public $table = 'cat_modalidad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre'
    ];

    public function carpetas()
    {
       return $this->hasMany('app/Models/Carpeta');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatProcedencia extends Model
{
    protected $table = 'cat_procedencia';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function vehiculos(){
        return $this->hasMany('App\Models\Vehiculo');
    }
}

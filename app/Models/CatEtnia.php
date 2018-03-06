<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEtnia extends Model
{
    protected $table = 'cat_etnia';

    protected $fillable = [
        'id', 'nombre',
    ];

    public function personas(){
    	return $this->hasMany('App\Models\Persona');
    }
}

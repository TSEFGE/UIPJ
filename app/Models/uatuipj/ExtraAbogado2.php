<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class ExtraAbogado2 extends Model
{
    protected $connection = 'uatuipj';

    public $table = 'extra_abogado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'cedulaProf',
        'sector',
        'correo',
        'tipo'
    ];

    public function variablesPersona()
    {
       return $this->belongsTo('App\Models\uatuipj\VariablesPersona2');
    }

    public function extraDenunciante()
    {
       return $this->hasMany('App\Models\uatuipj\ExtraDenunciante2');
    }

    public function extraDenunciado()
    {
       return $this->hasMany('App\Models\uatuipj\ExtraDenunciado2');
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestigo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        // 'nombres2' => array('regex:/^(([A-ZÁÉÑÍÓÚ][.]*[,]*[\s]*){1,100})/u'),
        // 'rfc2' => 'min:9|max:12',
        // 'representanteLegal' => array('regex:/^(([A-ZÁÉÑÍÓÚ][.]*[,]*[\s]*){1,300})/u'),
        'calle' => 'string|min:3|max:100',
        'calle3' => 'string|min:3|max:100',
        'telefonoN' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
        'narracion' => 'string|min:5|max:2000',
        'nombres' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,100})/u'),
        'primerAp' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,50})/u'),

        'rfc' => 'rfc|min:10|max:13',
        'curp' => 'string|min:18|max:18',
        'telefono'  => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
        'motivoEstancia'=> 'string|min:5|max:200',
        'docIdentificacion' => 'string|min:3|max:50',
        'numDocIdentificacion' => array('regex:/^([0-9]{1,50})/u'),
        'lugarTrabajo' => 'string|min:5|max:50',
        'telefonoTrabajo'  => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
        'calle2' => 'string|min:3|max:100',
         ];
    }

    public function messages()
    {
        return [
          'nombresQ.boolean' => 'A title is required',
        ];
    }
}

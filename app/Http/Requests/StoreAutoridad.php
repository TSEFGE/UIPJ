<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutoridad extends FormRequest
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
                
           'nombres' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,100})/u'),
           'primerAp' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,50})/u'),
        //   'segundoAp' => array('regex:/^((([A-ZÁÉÑÍÓÚ][\s]*)?){1,50})/u'),
            'rfc' => 'rfc|min:10|max:13',
            'curp' => 'string|min:18|max:18',
            'telefono' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
            'motivoEstancia' => 'string|min:5|max:200',
            'docIdentificacion' => 'string|min:3|max:50',
            'numDocIdentificacion' => array('regex:/^([0-9]{1,50})/u'),
            'calle' => 'string|min:3|max:100',
            'lugarTrabajo' => 'string|min:5|max:50',
            'telefonoTrabajo' => 'numtel|min:10|max:15',
            'calle2' => 'string|min:3|max:100',
            'horarioLaboral' => 'string|min:3|max:15',
            'narracion' => 'string|min:1|max:2000',

           
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

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
                
            'nombres' => 'nombre|min:3|max:50',
            'primerAp' => 'nombre|min:3|max:50',
            'primerAp' => 'nombre|min:3|max:50',
            'rfc' => 'rfc|min:10|max:13',
            'curp' => 'string|min:18|max:18',
            'telefono' => 'numtel|min:7|max:15',
            'motivoEstancia' => 'string|min:4|max:200',
            'docIdentificacion' => 'string|min:3|max:50',
            'numDocIdentificacion' => 'string|min:3|max:50',
            'calle' => 'string|min:3|max:100',
          //'numExterno' => 'alfanumdiag|min:1|max:10',
          //  'numInterno' => 'alfanumdiag|min:1|max:10',
            'lugarTrabajo' => 'string',
            'telefonoTrabajo' => 'numtel|min:7|max:15',
            'calle2' => 'string|min:3|max:100',
          //'numExterno2' => 'alfanumdiag|min:1|max:10',
           // 'numInterno2' => 'alfanumdiag|min:1|max:10',
            'horarioLaboral' => 'string',
            'narracion' => 'string|min:5|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

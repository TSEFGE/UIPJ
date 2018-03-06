<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbogado extends FormRequest
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
            'rfc' => 'rfc|min:10|max:20',
            'telefono' => 'numeric',
            'lugarTrabajo' => 'string',
            'telefonoTrabajo' => 'numeric',
            'calle2' => 'string|min:4|max:100',
            'numExterno2' => 'alfanumdiag|min:1|max:10',
            'numInterno2' => 'alfanumdiag|min:1|max:10',
            'cedulaProf' => 'string|min:1|max:50',
            'correo' => 'email',

        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

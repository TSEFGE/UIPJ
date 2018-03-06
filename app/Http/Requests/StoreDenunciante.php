<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDenunciante extends FormRequest
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

            'nombres2' => 'nombre|min:3|max:200',
            'rfc2' => 'rfc|min:10|max:20',
            'representanteLegal' => 'nombre|min:4|max:100',
            'calle' => 'string|min:4|max:100',
            'numExterno' => 'alfanumdiag|min:1|max:10',
            'numInterno' => 'alfanumdiag|min:1|max:10',
            'calle3' => 'string|min:4|max:100',
            'numExterno3' => 'alfanumdiag|min:1|max:10',
            'numInterno3' => 'alfanumdiag|min:1|max:10',
            'correo' => 'email',
            'telefonoN' => 'numeric',
            'fax' => 'numeric',
            'narracion' => 'string|min:5|max:2000',

            'nombres' => 'nombre|min:3|max:200',
            'primerAp' => 'nombre|min:3|max:50',
            'segundoAp' => 'nombre|min:3|max:50',
            'rfc' => 'rfc|min:10|max:20',
            'curp' => 'string|min:17|max:18',
            'telefono' => 'numeric',
            'motivoEstancia' => 'string|min:4|max:200',
            'docIdentificacion' => 'string|min:2|max:50',
            'numDocIdentificacion' => 'string|min:2|max:50',
            'lugarTrabajo' => 'string',
            'telefonoTrabajo' => 'numeric',
            'calle2' => 'string|min:4|max:100',
            'numExterno2' => 'alfanumdiag|min:1|max:10',
            'numInterno2' => 'alfanumdiag|min:1|max:10',
            
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

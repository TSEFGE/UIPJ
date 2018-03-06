<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDenunciado extends FormRequest
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
            'nombresQ' => 'nombre',

            'nombresC' => 'nombre|min:3|max:50',
            'primerApC' => 'nombre|min:3|max:50',
            'aliasC' => 'alias|min:1|max:50',
            'calleC' => 'string|min:4|max:100',
            'numExternoC' => 'alfanumdiag|min:1|max:10',
            'numInternoC' => 'alfanumdiag|min:1|max:10',
            'narracionC' => 'string|min:5|max:2000',
            
            'nombres2' => 'nombre|min:3|max:50',
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
            'senasPartic' => 'string|min:1|max:150',
            'narracion' => 'string|min:5|max:2000',

            'nombres' => 'nombre|min:3|max:50',
            'primerAp' => 'nombre|min:3|max:50',
            'primerAp' => 'nombre|min:3|max:50',
            'rfc' => 'rfc|min:10|max:20',
            'curp' => 'string|min:17|max:18',
            'telefono' => 'numeric',
            'motivoEstancia' => 'string|min:4|max:200',
            'telefonoTrabajo' => 'numeric',
            'docIdentificacion' => 'string|min:2|max:50',
            'numDocIdentificacion' => 'string|min:2|max:50',
            'lugarTrabajo' => 'string',
            'calle2' => 'string|min:4|max:100',
            'numExterno2' => 'alfanumdiag|min:1|max:10',
            'numInterno2' => 'alfanumdiag|min:1|max:10',
            'alias' => 'alias|min:1|max:50',
            'ingreso' => 'numeric',
            'residenciaAnterior' => 'string|min:4|max:100',
            'vestimenta' => 'string|min:4|max:150',
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.string' => 'El nombre Q.R.R. debe ser alfabético',
        ];
    }
}

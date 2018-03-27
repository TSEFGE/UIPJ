<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDelito extends FormRequest
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
            'calle' => 'string|min:3|max:100',
            'numExterno' => array('regex:/^((([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10})/u'),
             'numInterno' => array('regex:/^((([A-Z]|[-]|[\d])|(S/N)|(SIN NUMERO)){1,10})/u'),
            'entreCalle' => 'string|min:3|max:100',
            'yCalle' => 'string|min:3|max:100',
            'calleTrasera' => 'string|min:3|max:100',
            'puntoReferencia' => 'string|min:3|max:100',

        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

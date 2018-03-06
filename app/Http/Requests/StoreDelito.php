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
            'calle' => 'string|min:4|max:100',
            'numExterno' => 'alfanumdiag|min:1|max:10',
            'numInterno' => 'alfanumdiag|min:1|max:10',
            'entreCalle' => 'string|min:4|max:100',
            'yCalle' => 'string|min:4|max:100',
            'calleTrasera' => 'string|min:4|max:100',
            'puntoReferencia' => 'string|min:4|max:100',

        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

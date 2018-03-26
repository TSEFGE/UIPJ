<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFamiliar extends FormRequest
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
          // 'segundoAp' => array('regex:/^((([A-ZÁÉÑÍÓÚ][\s]*)?){1,50})/u'),
           
        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

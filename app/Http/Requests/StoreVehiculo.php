<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehiculo extends FormRequest
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
            'placas' => 'alpha_dash|min:4|max:9',
            'nrpv' => 'alpha_num|min:10|max:50',
            'numSerie' => 'alpha_num|min:4|max:17',
            'numMotor' => 'alpha_num|min:4|max:50',
            'permiso' => 'string|min:1|max:50',
            'senasPartic' => 'string|min:1|max:100',

        ];
    }

    public function messages()
    {
        return [
            'nombresQ.boolean' => 'A title is required',
        ];
    }
}

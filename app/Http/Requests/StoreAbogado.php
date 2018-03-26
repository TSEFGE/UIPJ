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
       'nombres' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,100})/u'),
       'primerAp' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,50})/u'),
       //'segundoAp' => array('regex:/^((([A-ZÁÉÑÍÓÚ][\s]*)?){1,50})/u'),
       'rfc' => 'rfc|min:10|max:13', 
       'telefono' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
       'lugarTrabajo' => 'string|min:5|max:50',
       'telefonoTrabajo' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
       'calle2' => 'string|min:5|max:100',
       'telefono' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
       'cedulaProf' => array('regex:/^([0-9]+)/u'),
       'correo' => 'correo|email',

       

     ];
   }

   public function messages()
   {
    return [
      'nombresQ.boolean' => 'A title is required',
    ];
  }
}

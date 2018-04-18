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

            
           'nombresQ'=> array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,100})/u'),
           'nombresC' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,100})/u'),
           'primerApC' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,50})/u'),
           'aliasC' => array('regex:/^(^([A-ZÁÉÑÍÓÚ][.]*[,]*[\s]*){1,50})/u'),
           'calleC' => 'string|min:3|max:100',
           'narracionC' => 'string|min:5|max:2000',
           'nombres2' => array('regex:/^(^([A-ZÁÉÑÍÓÚ][.]*[,]*[\s]*){1,100})/u'),
           'rfc2' => 'min:9|max:12',
           'representanteLegal'=> array('regex:/^(([A-ZÁÉÑÍÓÚ][.]*[,]*[\s]*){1,300})/u'),
           'calle' => 'string|min:3|max:100',
           'calle3' => 'string|min:3|max:100',
           'correo' => 'email',
           'telefonoN' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
           'senasPartic' => 'string|min:1|max:500',
           'narracion' => 'string|min:5|max:2000',
           'nombres' => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,100})/u'),
           'primerAp'  => array('regex:/^(([A-ZÁÉÑÍÓÚ][\s]*){1,50})/u'),
      //     'segundoAp'=> array('regex:/^((([A-ZÁÉÑÍÓÚ][\s]*)?){1,50})/u'),
           'rfc' => 'rfc|min:10|max:13',
           'curp' => 'string|min:18|max:18',
           'telefono' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'),
           'motivoEstancia' => 'string|min:5|max:200',
           'telefonoTrabajo' => array('regex:/^([0-9]{10,15}|(SIN NUMERO))/u'), 
           'docIdentificacion' => 'string|min:3|max:50',
           'numDocIdentificacion' => array('regex:/^([0-9]{1,50})/u'),
           'lugarTrabajo' => 'string|min:5|max:50',
           'calle2' => 'string|min:3|max:100',
           'alias' => 'alias|min:1|max:50',
           'ingreso' => 'numeric',
           'residenciaAnterior' => 'string|min:4|max:100',
           'vestimenta' => 'string|min:5|max:150',
       ];
   }

   public function messages()
   {
    return [
        'nombresQ.string' => 'El nombre Q.R.R. debe ser alfabético',
    ];
}
}

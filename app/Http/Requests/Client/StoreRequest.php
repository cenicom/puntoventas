<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'name'=>'required|string|max:50|min:3',
            'email'=>'required|email|string|max:150|min:10|unique:providers,email',
            'doc_number'=>'required|string|max:10|min:8|unique:providers,doc_number',
            'address'=>'required|string|max:100|min:10',
            'phone'=>'required|string|max:10|min:10'
        ];
    }

    public function messages()
    {
        # code...
        return [
            'name.required'=>'Este Campo es Obligatorio',
            'name.string'=>'Tipo de Datos no Válido',
            'name.max'=>'Solo se Aceptan como Máximo 50 Caracteres',
            'name.min'=>'Solo se Aceptan como Mínimo 3 Caracteres',

            'email.required'=>'Este Campo es Obligatorio',
            'email.string'=>'Tipo de Datos no Válido',
            'email.max'=>'Solo se Aceptan como Máximo 150 Caracteres',
            'email.min'=>'Solo se Aceptan como Mínimo 3 Caracteres',
            'email.unique'=>'Valor ya Registrado, Ingresar Otro',

            'doc_number.required'=>'Este Campo es Obligatorio',
            'doc_number.string'=>'Tipo de Datos no Válido',
            'doc_number.max'=>'Solo se Aceptan como Máximo 100 Caracteres',
            'doc_number.min'=>'Solo se Aceptan como Mínimo 10 Caracteres',
            'doc_number.unique'=>'Valor ya Registrado, Ingresar Otro',

            'address.required'=>'Este Campo es Obligatorio',
            'address.string'=>'Tipo de Datos no Válido',
            'address.max'=>'Solo se Aceptan como Máximo 150 Caracteres',
            'address.min'=>'Solo se Aceptan como Mínimo 3 Caracteres',

            'phone.required'=>'Este Campo es Obligatorio',
            'phone.string'=>'Tipo de Datos no Válido',
            'phone.max'=>'Solo se Aceptan como Máximo 10 Caracteres',
            'phone.min'=>'Solo se Aceptan como Mínimo 10 Caracteres',
        ];
    }
}

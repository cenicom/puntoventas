<?php

namespace App\Http\Requests\Category;

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

            'description'=>'required|string|max:255|min:3'
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

            'description.required'=>'Este Campo es Obligatorio',
            'description.string'=>'Tipo de Datos no Válido',
            'description.max'=>'Solo se Aceptan como Máximo 255 Caracteres',
            'description.min'=>'Solo se Aceptan como Mínimo 3 Caracteres',
        ];
    }
}

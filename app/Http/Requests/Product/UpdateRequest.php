<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'code'=>'required|string|max:20|min:3|unique:products,code,' .
            $this->route('product')->id,
            'name'=>'required|string|max:150|min:10|unique:products,name,' .
            $this->route('product')->id,
            'stock'=>'required|integer|max:10|min:5',
            'image'=>'required|dimensions:min_width:100,mi_heigth:200',
            'sell_price'=>'required',
            'status'=>'required',
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id',
        ];
    }

    public function messages()
    {
        # code...
        return [
            'code.required'=>'Este Campo es Obligatorio',
            'code.string'=>'Tipo de Datos no Válido',
            'code.max'=>'Solo se Aceptan como Máximo 20 Caracteres',
            'code.min'=>'Solo se Aceptan como Mínimo 3 Caracteres',
            'code.unique'=>'Valor ya Registrado, Ingresar Otro',

            'name.required'=>'Este Campo es Obligatorio',
            'name.string'=>'Tipo de Datos no Válido',
            'name.max'=>'Solo se Aceptan como Máximo 150 Caracteres',
            'name.min'=>'Solo se Aceptan como Mínimo 10 Caracteres',
            'name.unique'=>'Valor ya Registrado, Ingresar Otro',

            'stock.required'=>'Este Campo es Obligatorio',
            'stock.integer'=>'Tipo de Datos no Válido',

            'image.required'=>'Este Campo es Obligatorio',
            'image.dimensions'=>'Solo se Aceptan Imagene de 100x200',

            'sell_price.required'=>'Este Campo es Obligatorio',

            'category_id.required'=>'Este Campo es Obligatorio',
            'category_id.integer'=>'Tipo de Datos no Válido',
            'category_id.exists'=>'Valor ya Registrado, Ingresar Otro',

            'provider_id.required'=>'Este Campo es Obligatorio',
            'provider_id.integer'=>'Tipo de Datos no Válido',
            'provider_id.exists'=>'Valor ya Registrado, Ingresar Otro',
        ];
    }
}

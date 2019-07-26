<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_producto' => 'required|unique:productos',
            'descripcion' => 'max:250',
            'unidades_id' => 'number',
            'fabricantes_id' => 'number',
        ];
    }
    
    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre_producto.required' => 'Nombre Requerido!',
            'nombre_producto.unique' => 'Nombre Unico!'
        ];
    }
}

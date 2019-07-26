<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadesStoreRequest extends FormRequest
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
            'nombre' => 'required|unique:unidades|max:255',
            'abreviatura' => 'required|unique:unidades'
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
            'nombre.required' => 'Nombre Requerido!',
            'abreviatura.required' => 'Abreviatura Requerida!'
        ];
    }
    
    
       /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
//    public function filters()
//    {
//        return [
//            'email' => 'trim|lowercase',
//            'name' => 'trim|capitalize|escape'
//        ];
//    }
    
}

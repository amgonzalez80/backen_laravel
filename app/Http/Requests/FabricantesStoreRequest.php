<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricantesStoreRequest extends FormRequest
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
            'nombre' => 'required|unique:fabricantes|max:255',
            'identificacion' => 'required|unique:fabricantes|max:255',
            'direccion' => 'max:255',
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
            'identificacion.required' => 'Identificacion Requerida!'
        ];
    }
}

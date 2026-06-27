<?php

namespace App\Http\Requests\Permisos;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PermisoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_permiso' => 'required|string',
            'slug_permiso' => 'required|string',
            'descripcion_permiso' => 'required|string',
        ];
    }

/*     protected function prepareForValidation()
    {
        $this->merge([
            'nombre_permiso'        => $this->nombrePermiso,
            'slug_permiso'          => $this->slugPermiso,
            'descripcion_permiso'   => $this->descripcionPermiso
        ]);
    }
 */
    public function messages(): array
    {
        return [
            'nombre_permiso.required' => 'El campo de nombre del permiso es obligatorio.',
            'nombre_permiso.string' => 'El campo de nombre del permiso debe ser una cadena de texto.',
            'slug_permiso.required' => 'El campo de slug del permiso es obligatorio.',
            'slug_permiso.string' => 'El campo de slug del permiso debe ser una cadena de texto.',
            'descripcion_permiso.required' => 'El campo de descripción del permiso es obligatorio.',
            'descripcion_permiso.string' => 'El campo de descripción del permiso debe ser una cadena de texto.',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errores = $validator->errors()->all();
        $erroresTexto = implode(', ', $errores);

        throw new HttpResponseException(
            response()->json([
                'status' => 422,
                'message' => 'Error de validaciones',
                'errors' => $validator->errors()
            ], 422)
        );
    }
}

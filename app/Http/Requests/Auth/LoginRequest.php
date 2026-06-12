<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'usuario' => 'required|string',
            'password' => 'required|string',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_usuario'      => $this->usuario,
            'password_usuario'  => $this->password
        ]);
    }

    public function messages(): array
    {
        return [
            'usuario.required' => 'El campo de usuario es obligatorio.',
            'usuario.string' => 'El campo de usuario debe ser una cadena de texto.',
            'password.required' => 'El campo de contraseña es obligatorio.',
            'password.string' => 'El campo de contraseña debe ser una cadena de texto.',
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

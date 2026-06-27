<?php

namespace App\Http\Services\Auth;

use App\Http\Responses\ApiResponse;
use App\Models\Usuarios\Usuario;
use App\Models\Usuarios\UsuarioModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthService
{
    public function login($request)
    {
        try {
            $usuario = UsuarioModel::where('user_usuario', $request->input('user_usuario'))->first();

            if (!$usuario || !Hash::check($request->input('password_usuario'), $usuario->password_usuario)) {
                return ApiResponse::warning(401, 'Error', 'Credenciales inválidas', []);
            }

            $token = $usuario->createToken('auth_token')->plainTextToken;
            $data = [
                'user' => $usuario,
                'token' => $token
            ];

            UsuarioModel::where('id_usuario', $usuario->id_usuario)->update(['fecha_ultima_sesion' => now()]);

            return ApiResponse::success(200, 'Éxito', 'Inicio de sesión exitoso', $data);
        } catch (\Throwable $e) {
            Log::error('Error en login: ' . $e->getMessage(), [
                'exception' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            return ApiResponse::error(500, 'Error', 'Ocurrió un error al procesar tu solicitud', null);
        }
    }
}

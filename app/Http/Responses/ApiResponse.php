<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public static function success(int $statusCode, string $titulo, string $mensaje, mixed $data = null, string $icono = 'success',): JsonResponse
    {
        $respuesta = [
            'statusCode' => $statusCode,
            'titulo' => $titulo,
            'mensaje' => $mensaje,
            'icono' => $icono,
            'data' => $data
        ];

        return response()->json($respuesta, $statusCode);
    }

    public static function error(int $statusCode, string $titulo, string $mensaje, $error = null): JsonResponse
    {
        $respuesta = [
            'statusCode' => $statusCode,
            'titulo' => $titulo,
            'mensaje' => $mensaje,
            'icono' => 'error',
            'data' => $error
        ];

        return response()->json($respuesta, $statusCode);
    }

    public static function warning(int $statusCode, string $titulo, string $mensaje, array $data = []): JsonResponse
    {
        $respuesta = [
            'statusCode' => $statusCode,
            'titulo' => $titulo,
            'mensaje' => $mensaje,
            'icono' => 'warning',
            'data' => $data
        ];

        return response()->json($respuesta, $statusCode);
    }

    static function successSesion($statusCode, $titulo, $icono, $data, $token){
            $respuesta = [
                'statusCode'    => $statusCode,
                'titulo'        => $titulo,
                'icono'         => $icono,
                'data'          => $data
            ];

            return response()->json($respuesta, $statusCode);
    }

    static function successListado($statusCode, $titulo, $mensaje, $data, $infoPagination){
        $respuesta = [
            'statusCode'        => $statusCode,
            'titulo'            => $titulo,
            'mensaje'           => $mensaje,
            'icono'             => 'success',
            'data'              => $data,
            'infoPagination'   => $infoPagination
        ];

        return response()->json($respuesta, $statusCode);
    }
}

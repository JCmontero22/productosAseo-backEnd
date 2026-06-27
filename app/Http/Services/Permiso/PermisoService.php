<?php

    namespace App\Http\Services\Permiso;

use App\Http\Resources\Permisos\PermisoResource;
use App\Http\Responses\ApiResponse;
use App\Models\Permisos\PermisoModel;
use Illuminate\Support\Facades\Log;

    class PermisoService{
        public function registroPermiso(object $request)
        {
            try {
                $permiso = PermisoModel::create($request->validated());

                $permiso->refresh();
                $permiso->load('estado');

                return ApiResponse::success(201, 'Registro Exitoso', 'El permiso se ha registrado correctamente',  new PermisoResource($permiso));


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

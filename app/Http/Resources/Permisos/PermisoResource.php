<?php

namespace App\Http\Resources\Permisos;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermisoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_permiso,
            'nombre' => $this->nombre_permiso,
            'descripcion' => $this->descripcion_permiso,
            'slug' => $this->slug_permiso,
            'estado' => [
                'id' => optional($this->estado)->id_estado,
                'nombre' => optional($this->estado)->nombre_estado,
            ],
            'fecha_creacion' => $this->created_at,
        ];
    }
}

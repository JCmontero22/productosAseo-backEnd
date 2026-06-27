<?php

namespace App\Models\Permisos;

use App\Models\Estados\EstadoModel;
use Illuminate\Database\Eloquent\Model;

class PermisoModel extends Model
{
    protected $table = 'permisos';
    protected $primaryKey = 'id_permiso';
    protected $fillable = [
        'nombre_permiso',
        'descripcion_permiso',
        'slug_permiso',
        'id_estado'
    ];

    public function estado()
    {
        return $this->belongsTo(EstadoModel::class, 'id_estado', 'id_estado');
    }
}

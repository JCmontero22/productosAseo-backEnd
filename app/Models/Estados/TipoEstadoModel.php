<?php

namespace App\Models\Estados;

use Illuminate\Database\Eloquent\Model;

class TipoEstadoModel extends Model
{
    protected $table = 'tipos_estados';
    protected $primaryKey = 'id_tipo_estado';
    

    protected $fillable = [
        'nombre_tipo_estado',
        'descripcion_tipo_estado'
    ];

    public function estados()
    {
        return $this->hasMany(EstadoModel::class, 'id_tipo_estado', 'id_tipo_estado');
    }
}

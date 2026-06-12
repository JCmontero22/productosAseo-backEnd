<?php

namespace App\Models\Estados;

use Illuminate\Database\Eloquent\Model;

class EstadoModel extends Model
{
    protected $table = 'estados';
    protected $primaryKey = 'id_estado';

    protected $fillable = [
        'nombre_estado',
        'descripcion_estado',
        'id_tipo_estado'
    ];

    public function tipoEstado()
    {
        return $this->belongsTo(TipoEstadoModel::class, 'id_tipo_estado', 'id_tipo_estado');
    }
}

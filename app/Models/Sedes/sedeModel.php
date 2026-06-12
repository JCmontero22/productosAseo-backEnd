<?php

namespace App\Models\Sedes;

use Illuminate\Database\Eloquent\Model;

class sedeModel extends Model
{
    protected $table = 'sedes';
    protected $primaryKey = 'id_sede';

    protected $fillable = [
        'nombre_sede',
        'direccion_sede',
        'telefono_sede',
        'email_sede',
        'responsable_sede',
        'id_estado'
    ];

    public function estado(){
        return $this->belongsTo(EstadoModel::class, 'id_estado', 'id_estado');
    }
}

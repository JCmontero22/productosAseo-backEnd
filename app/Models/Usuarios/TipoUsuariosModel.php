<?php

namespace App\Models\Usuarios;

use App\Models\Estados\EstadoModel;
use Illuminate\Database\Eloquent\Model;

class TipoUsuariosModel extends Model
{
    protected $table = 'tipos_usuarios';
    protected $primaryKey = 'id_tipo_usuario';

    protected $fillable = [
        'nombre_tipo_usuario',
        'descripcion_tipo_usuario',
        'id_estado'
    ];

    public function usuarios()
    {
        return $this->hasMany(UsuarioModel::class, 'id_tipo_usuario', 'id_tipo_usuario');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoModel::class, 'id_estado', 'id_estado');
    }
}

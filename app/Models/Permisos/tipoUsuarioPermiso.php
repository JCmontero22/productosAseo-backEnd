<?php

namespace App\Models\Permisos;

use App\Models\Usuarios\TipoUsuariosModel;
use Illuminate\Database\Eloquent\Model;

class tipoUsuarioPermiso extends Model
{
    protected $table = 'tipo_usuario_permisos';
    protected $primaryKey = 'id_tipo_usuario_permiso';

    protected $fillable = [
        'id_tipo_usuario',
        'id_permiso'
    ];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuariosModel::class, 'id_tipo_usuario', 'id_tipo_usuario');
    }

    public function permiso()
    {
        return $this->belongsTo(PermisoModel::class, 'id_permiso', 'id_permiso');
    }
}

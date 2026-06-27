<?php

namespace App\Models\Usuarios;

use App\Models\Estados\EstadoModel;
use App\Models\Sedes\sedeModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class UsuarioModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'id_tipo_usuario',
        'id_sede',
        'nombre_usuario',
        'user_usuario',
        'password_usuario',
        'id_estado',
        'fecha_ultima_sesion',
    ];

    protected $hidden = [
        'password_usuario',
    ];

    public function getAuthPassword()
    {
        return $this->password_usuario;
    }

    public function getAuthPasswordName()
    {
        return 'password_usuario';
    }

    public function getAuthIdentifierName()
    {
        return 'user_usuario';
    }

    public function estado()
    {
        return $this->belongsTo(EstadoModel::class, 'id_estado', 'id_estado');
    }

    public function sede()
    {
        return $this->belongsTo(sedeModel::class, 'id_sede', 'id_sede');
    }

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuariosModel::class, 'id_tipo_usuario', 'id_tipo_usuario');
    }
}

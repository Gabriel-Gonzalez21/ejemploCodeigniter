<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'ID_usu';

    protected $allowedFields = [
        'usuario',      // email
        'password',     // MD5
        'nombre',
        'telefono',
        'passwordMail',
        'estado',
        'rol'
    ];
}

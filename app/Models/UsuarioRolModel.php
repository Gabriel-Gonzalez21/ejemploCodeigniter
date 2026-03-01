<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioRolModel extends Model
{
    protected $table = 'usuario_rol';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'rol_id'];
}

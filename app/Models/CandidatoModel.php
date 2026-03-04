<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidatoModel extends Model
{
    protected $table = 'candidatos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre', 'apellidos', 'email', 'password', 'dni', 'fecha_nacimiento',
        'telefono', 'direccion', 'ciudad', 'provincia', 'cp',
        'foto', 'perfil_completo', 'privacidad', 'notificaciones_email'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'creado_en';
    protected $updatedField  = 'actualizado_en';
}

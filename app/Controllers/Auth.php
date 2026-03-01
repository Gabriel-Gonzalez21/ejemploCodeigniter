<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\UsuarioRolModel;
use App\Models\RolModel;

/*
Este controlador será el “portero” del sistema.
Su trabajo es:
Mostrar el formulario de login
    -Validar los datos
    -Buscar al usuario en la base de datos
    -Verificar la contraseña
    -Cargar el rol del usuario
    -Guardar la sesión
    -Redirigir según el rol
Es decir: aquí empieza la seguridad del proyecto.
*/

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // 1. Validación básica
        if (!$email || !$password) {
            return redirect()->back()->with('error', 'Debes introducir email y contraseña');
        }

        // 2. Buscar usuario
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuario no encontrado');
        }

        // 3. Verificar contraseña
        if (!password_verify($password, $usuario['password'])) {
            return redirect()->back()->with('error', 'Contraseña incorrecta');
        }

        // 4. Obtener rol del usuario
        $usuarioRolModel = new UsuarioRolModel();
        $rol = $usuarioRolModel
            ->select('roles.nombre')
            ->join('roles', 'roles.id = usuario_rol.rol_id')
            ->where('usuario_rol.usuario_id', $usuario['id'])
            ->first();

        // 5. Guardar sesión
        session()->set([
            'usuario_id' => $usuario['id'],
            'usuario_nombre' => $usuario['nombre'],
            'usuario_email' => $usuario['email'],
            'usuario_rol' => $rol['nombre'],
            'isLoggedIn' => true
        ]);

        // 6. Redirigir según rol
        switch ($rol['nombre']) {
            case 'admin':
                return redirect()->to('/admin');
            case 'candidato':
                return redirect()->to('/candidato');
            case 'empresa':
                return redirect()->to('/empresa');
            default:
                return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

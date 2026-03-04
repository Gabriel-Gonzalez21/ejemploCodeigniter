<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\CandidatoModel;

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

        if (!$email || !$password) {
            return redirect()->back()->with('error', 'Debes introducir email y contraseña');
        }

        /*
        |--------------------------------------------------------------------------
        | 1. BUSCAR EN TABLA USUARIOS (admins, empresas, candidatos internos)
        |--------------------------------------------------------------------------
        */
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('usuario', $email)->first();

        if ($usuario) {

            // Validar contraseña (usa md5 en tu sistema actual)
            if (md5($password) !== $usuario['password']) {
                return redirect()->back()->with('error', 'Contraseña incorrecta');
            }

            // Convertir rol numérico a texto
            $rol = (int) $usuario['rol'];
            $rolNombre = match ($rol) {
                3 => 'admin',
                2 => 'empresa',
                1 => 'candidato',
                default => 'candidato'
            };

            // Crear sesión
            session()->set([
                'usuario_id'     => $usuario['ID_usu'],
                'usuario_nombre' => $usuario['nombre'],
                'usuario_email'  => $usuario['usuario'],
                'usuario_rol'    => $rolNombre,
                'isLoggedIn'     => true
            ]);

            // Redirigir según rol
            return match ($rolNombre) {
                'admin'     => redirect()->to('/admin'),
                'empresa'   => redirect()->to('/empresa'),
                'candidato' => redirect()->to('/candidato'),
                default     => redirect()->to('/'),
            };
        }

        /*
        |--------------------------------------------------------------------------
        | 2. BUSCAR EN TABLA CANDIDATOS (usuarios registrados desde el formulario)
        |--------------------------------------------------------------------------
        */
        $candidatoModel = new CandidatoModel();
        $candidato = $candidatoModel->where('email', $email)->first();

        if ($candidato) {

            // Validar contraseña con password_hash()
            if (!password_verify($password, $candidato['password'])) {
                return redirect()->back()->with('error', 'Contraseña incorrecta');
            }

            // Crear sesión para candidato
            session()->set([
                'usuario_id'     => $candidato['id'],
                'usuario_nombre' => $candidato['nombre'],
                'usuario_email'  => $candidato['email'],
                'usuario_rol'    => 'candidato',
                'isLoggedIn'     => true
            ]);

            return redirect()->to('/candidato');
        }

        /*
        |--------------------------------------------------------------------------
        | 3. SI NO EXISTE EN NINGUNA TABLA
        |--------------------------------------------------------------------------
        */
        return redirect()->back()->with('error', 'Usuario no encontrado');
    }


    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

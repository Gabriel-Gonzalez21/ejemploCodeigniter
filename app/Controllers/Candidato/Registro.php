<?php

namespace App\Controllers\Candidato;

use App\Controllers\BaseController;
use App\Models\CandidatoModel;

class Registro extends BaseController
{
    public function registro()
    {
        return view('candidato/auth/registro');
    }

    public function procesarRegistro(){
    // Validación
    $validation = $this->validate([
        'nombre'            => 'required|min_length[2]',
        'apellidos'         => 'required|min_length[2]',
        'email'             => 'required|valid_email|is_unique[candidatos.email]',
        'dni'               => 'required|min_length[8]|is_unique[candidatos.dni]',
        'fecha_nacimiento'  => 'required',
        'password'          => 'required|min_length[6]',
        'password2'         => 'required|matches[password]',
    ]);

    if (!$validation) {
        return redirect()->back()->withInput()->with('error', 'Revisa los campos del formulario.');
    }

    // Generar token de verificación
    $token = bin2hex(random_bytes(32));

    // Guardar en BD
    $model = new CandidatoModel();

    $model->save([
        'nombre'            => $this->request->getPost('nombre'),
        'apellidos'         => $this->request->getPost('apellidos'),
        'email'             => $this->request->getPost('email'),
        'dni'               => $this->request->getPost('dni'),
        'fecha_nacimiento'  => $this->request->getPost('fecha_nacimiento'),
        'password'          => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'token_verificacion' => $token,
        'email_verificado'   => 0
    ]);

    // Enviar email de confirmación
    $this->enviarEmailConfirmacion($this->request->getPost('email'), $token);

    // Redirigir al login
    return redirect()->to('/login')->with('success', 'Registro completado. Revisa tu email para activar tu cuenta.');
    }



//Funcion para enviar el email de confirmacion
private function enviarEmailConfirmacion($email, $token)
{
    $emailService = \Config\Services::email();

    $emailService->setTo($email);
    $emailService->setSubject('Confirma tu cuenta');

    $mensaje = "
        <p>Gracias por registrarte.</p>
        <p>Haz clic en el siguiente enlace para activar tu cuenta:</p>
        <p><a href='" . base_url('verificar/' . $token) . "'>Activar cuenta</a></p>
    ";

    $emailService->setMessage($mensaje);
    $emailService->setMailType('html');

    $emailService->send();
}





}

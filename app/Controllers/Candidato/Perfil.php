<?php

namespace App\Controllers\Candidato;

use App\Controllers\BaseController;
use App\Models\CandidatoModel;

class Perfil extends BaseController
{
    public function index()
    {
        $model = new CandidatoModel();
        $candidato = $model->find(session('usuario_id'));

        return view('candidato/perfil/index', [
            'candidato' => $candidato
        ]);
    }

    public function editar()
    {
        $model = new CandidatoModel();
        $candidato = $model->find(session('usuario_id'));

        return view('candidato/perfil/editar', [
            'candidato' => $candidato
        ]);
    }

    public function actualizar()
    {
        $model = new CandidatoModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'descripcion' => $this->request->getPost('descripcion'),
            'privacidad' => $this->request->getPost('privacidad'),
        ];

        // Subida de foto
        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid()) {
            $nombreFoto = $foto->getRandomName();
            $foto->move('uploads/candidatos', $nombreFoto);
            $data['foto'] = $nombreFoto;
        }

        $model->update(session('usuario_id'), $data);

        return redirect()->to('/candidato/perfil')->with('success', 'Perfil actualizado correctamente');
    }
}

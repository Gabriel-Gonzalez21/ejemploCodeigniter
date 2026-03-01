<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

/*Este filtro comprueba si el usuario tiene el rol adecuado para la ruta*/

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $rolNecesario = $arguments[0] ?? null;
        $rolUsuario = session()->get('usuario_rol');

        if ($rolNecesario !== $rolUsuario) {
            return redirect()->to('/login')->with('error', 'No tienes permiso para acceder a esta sección');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nada aquí
    }
}

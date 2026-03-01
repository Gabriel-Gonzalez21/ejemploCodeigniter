<?php

namespace App\Controllers\Ofertas;

use App\Controllers\BaseController;

class Listado extends BaseController
{
    public function index()
    {
        return view('ofertas/listado');
    }
}

<?php

namespace App\Controllers\Empresa;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('empresa/dashboard');
    }
}

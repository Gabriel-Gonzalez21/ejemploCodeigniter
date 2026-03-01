<?php

namespace App\Controllers\Candidato;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('candidato/dashboard');
    }
}

<?php

namespace App\Controllers;

class Empresas extends BaseController
{
    public function index()
    {
        return view('empresas/index');
    }
}
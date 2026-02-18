<?php

namespace App\Controllers;

class Ofertas extends BaseController
{
    public function index()
    {
        return view('ofertas/index');
    }
}
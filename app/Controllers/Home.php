<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function public(): string
    {
        return view('Views/layout/public');
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function sbadmin(): string
    {
        return view('Views/layout/sbadmin');
    }
}

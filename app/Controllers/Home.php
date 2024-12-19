<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Carpeta1/Index1');
    }
    
}

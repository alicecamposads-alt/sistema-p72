<?php

namespace App\Controllers;

class pagina_inicial extends BaseController
{
    public function index()
    {
        return view('pagina_inicial');
    }
}
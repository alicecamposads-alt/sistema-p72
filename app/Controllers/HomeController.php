<?php

namespace App\Controllers;

class Home extends HomeController
{
    public function contato(): string
    {
        return view('Contato');
    }
}

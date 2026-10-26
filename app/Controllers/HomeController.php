<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function pagina_inicial(): string
    {
        return view('pagina_inicial');
    }
    public function contato(): string
    {
        return view('contato');
    }

    public function produtos(): string
    {
        return view('produtos');
    }

    public function quem_sou(): string
    {
        return view('quem_sou');
    }

    public function sobre(): string
    {
        return view('sobre');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ConteudoController extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $query = $db->query("SELECT * FROM Conteudo WHERE Id = 1");

        $dados = $query->getRow();

        return view('pagina_inicial', [
            'titulo' => $dados->Titulo,
            'texto' => $dados->Texto
        ]);
    }

    public function quemSou()
    {
        $db = db_connect();

        $query = $db->query("SELECT * FROM Conteudo WHERE Id = 2");

        $dados = $query->getRow();

        return view('quem_sou', [
            'titulo' => $dados->Titulo,
            'texto' => $dados->Texto
        ]);
    }

    public function produtos()
    {
        $db = db_connect();

        $query = $db->query("SELECT * FROM Conteudo WHERE Id = 3");

        $dados = $query->getRow();

        return view('produtos', [
            'titulo' => $dados->Titulo,
            'texto' => $dados->Texto
        ]);
    }

    public function sobre()
    {
        $db = db_connect();

        $query = $db->query("SELECT * FROM Conteudo WHERE Id = 4");

        $dados = $query->getRow();

        return view('sobre', [
            'titulo' => $dados->Titulo,
            'texto' => $dados->Texto
        ]);
    }

    public function contato()
    {
        $db = db_connect();

        $query = $db->query("SELECT * FROM Conteudo WHERE Id = 5");

        $dados = $query->getRow();

        return view('contato', [
            'titulo' => $dados->Titulo,
            'texto' => $dados->Texto
        ]);
    }
}
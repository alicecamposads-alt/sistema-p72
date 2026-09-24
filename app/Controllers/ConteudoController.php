<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
    public function index():string
    {
      // 1. Instancia o Model
 $conteudoModel = new ConteudoModel();

 // 2. Busca o registro com Id = 1
 $dados['conteudo'] = $conteudoModel->find(1);

 // 3. Envia os dados para a view 'home'
 return view('pagina_inicial', $dados);
    }

    public function quem_sou():string
    {
       // 1. Instancia o Model
 $conteudoModel = new ConteudoModel();

 // 2. Busca o registro com Id = 1
 $dados['conteudo'] = $conteudoModel->find(2);
 // 3. Envia os dados para a view 'home'
 return view('quem_sou', $dados);
    }

    public function produtos():string
    {
       // 1. Instancia o Model
 $conteudoModel = new ConteudoModel();
 // 2. Busca o registro com Id = 1
 $dados['conteudo'] = $conteudoModel->find(3);
 // 3. Envia os dados para a view 'home'
 return view('produtos', $dados);
    }

    public function sobre():string
    {
       // 1. Instancia o Model
 $conteudoModel = new ConteudoModel();
 // 2. Busca o registro com Id = 1
 $dados['conteudo'] = $conteudoModel->find(4);
 // 3. Envia os dados para a view 'home'
 return view('sobre', $dados);
    }

    public function contato():string
    {
        // 1. Instancia o Model
 $conteudoModel = new ConteudoModel();
 // 2. Busca o registro com Id = 1
 $dados['conteudo'] = $conteudoModel->find(5);
 // 3. Envia os dados para a view 'home'
 return view('contato', $dados);
    }
}
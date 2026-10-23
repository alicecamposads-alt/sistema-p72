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
public function listar(): string
 {
 $model = new ConteudoModel();
 return view('conteudo/listar', [
 'conteudos' => $model->findAll(),
 ]);
 }
 public function editar($id): string
 {
 $model = new ConteudoModel();
 $conteudo = $model->find($id);
 if ($conteudo === null) {
 throw PageNotFoundException::forPageNotFound(
 'O conteúdo solicitado não foi encontrado.'
 );
 }
 return view('conteudo/editar', [
 'conteudo' => $conteudo,
 'erros' => [],
 ]);
 }
 public function atualizar($id)
 {
 $model = new ConteudoModel();
 $conteudo = $model->find($id);
 if ($conteudo === null) {
 throw PageNotFoundException::forPageNotFound(
 'O conteúdo solicitado não foi encontrado.'
 );
 }
 $dadosPost = [
 'Titulo' => $this->request->getPost('Titulo'),
 'Texto' => $this->request->getPost('Texto'),
 ];
 $regras = [
 'Titulo' => 'required|max_length[255]',
 'Texto' => 'required',
 ];
 if (!$this->validate($regras)) {
 $conteudo['Titulo'] = $dadosPost['Titulo'] ?? '';
 $conteudo['Texto'] = $dadosPost['Texto'] ?? '';
 return view('conteudo/editar', [
 'conteudo' => $conteudo,
 'erros' => $this->validator->getErrors(),
 ]);
 }
 $model->update($id, $dadosPost);
 return redirect()
 ->to(site_url('conteudos'))
 ->with('mensagem', 'Conteúdo atualizado com sucesso.');
 }
}

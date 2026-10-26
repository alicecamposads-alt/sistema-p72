<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/pagina_inicial', 'ConteudoController::index');

$routes->get('/quem_sou', 'ConteudoController::quem_sou');

$routes->get('/produtos', 'ConteudoController::produtos');

$routes->get('/sobre', 'ConteudoController::sobre');

$routes->get('/contato', 'ConteudoController::contato');

// Listagem, formulário de edição e atualização
$routes->get('conteudos', 'ConteudoController::listar');
$routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
$routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');

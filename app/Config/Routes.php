<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'ConteudoController::index');

$routes->get('/pagina_inicial', 'ConteudoController::index');

$routes->get('/quem_sou', 'ConteudoController::quemSou');

$routes->get('/produtos', 'ConteudoController::produtos');

$routes->get('/sobre', 'ConteudoController::sobre');

$routes->get('/contato', 'ConteudoController::contato');
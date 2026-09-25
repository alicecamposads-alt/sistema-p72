<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/pagina_inicial', 'ConteudoController::index');

$routes->get('/home', 'ConteudoController::index');

$routes->get('/quem_sou', 'ConteudoController::quem_sou');

$routes->get('/produtos', 'ConteudoController::produtos');

$routes->get('/sobre', 'ConteudoController::sobre');

$routes->get('/contato', 'ConteudoController::contato');
<?php

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use armando\core\Aplicacion;
use armando\controller\UsuariosController;
use armando\controller\SessionController;

$url = $_GET['alekas_url'] ?? "/";

$app = new Aplicacion($url, dirname(__DIR__));

$app->ruta->get('/', function() {
    echo 'soy la raiz';
});
$app->ruta->post('usuario/agregar', [UsuariosController::class, 'agregar']);
$app->ruta->get('usuario/mostrar', [UsuariosController::class, 'mostrar']);
$app->ruta->get('usuario/modificar', [UsuariosController::class, 'update']);
$app->ruta->get('usuario/eliminar', [UsuariosController::class, 'delete']);

$app->ruta->get('sesion/inicio', [SessionController::class, 'inicio']);
$app->ruta->get('sesion/salir', [SessionController::class, 'salir']);
$app->ruta->get('sesion/pregunta', [SessionController::class, 'pregunta']);

$app->ruta->get('generar', [UsuariosController::class, 'generar']);

$app->ruta->get('react', 'react');
$app->Run(true);





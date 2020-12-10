<?php

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use armando\core\Aplicacion;
use armando\controller\UsuariosController;
use armando\controller\SessionController;

$url = $_GET['alekas_url'] ?? "/";

$app = new Aplicacion($url, dirname(__DIR__));

$app->ruta->get('registrar', 'registrar');
$app->ruta->post('registrar', [SessionController::class, 'register']);

$app->Run(true);





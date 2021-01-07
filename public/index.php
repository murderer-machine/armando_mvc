<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 0);
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use armando\core\Aplicacion;
use armando\controller\UsuariosController;
use armando\controller\SessionController;
use armando\controller\UsuariosGeneralesController;
use armando\controller\EmpresasController;

$url = $_GET['alekas_url'] ?? "/";

$app = new Aplicacion($url, dirname(__DIR__));
// Ruta GET
$app->ruta->get('registrar', 'registrar');
$app->ruta->get('/', [UsuariosGeneralesController::class, 'agregar']);
$app->ruta->get('empresaCrear', [EmpresasController::class, 'agregar']);
// Ruta POST
$app->ruta->post('registrar', [SessionController::class, 'register']);
$app->ruta->post('usuario/agregar', [UsuariosController::class, 'agregar']);
// Ruta EJECUTA
$app->Run(true);





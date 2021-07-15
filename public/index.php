<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 0);
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use hardmvc\core\Aplicacion;
use hardmvc\controller\SessionGeneralesController;
use hardmvc\controller\UsuariosGeneralesController;
use hardmvc\controller\EmpresasController;
use hardmvc\controller_clientes\c45463902\UsuariosController;

$url = $_GET['alekas_url'] ?? "/";

$app = new Aplicacion($url, dirname(__DIR__));

$app->ruta->post('usuarios/agregar', [UsuariosGeneralesController::class, 'agregar']);

$app->ruta->get('usuarios/mostrar', [UsuariosGeneralesController::class, 'mostrar']);
$app->ruta->get('/', 'principal');

// Ruta EJECUTA
$app->Run(true);


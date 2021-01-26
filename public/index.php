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
use armando\controller\SessionGeneralesController;
use armando\controller\UsuariosGeneralesController;
use armando\controller\EmpresasController;
use armando\controller_clientes\c45463902\UsuariosController;

$url = $_GET['alekas_url'] ?? "/";

$app = new Aplicacion($url, dirname(__DIR__));
// Ruta GET
$app->ruta->get('registrar', 'registrar');
$app->ruta->get('ingresar', 'ingresar');

// Ruta POST
$app->ruta->post('registrar', [SessionController::class, 'register']);
//$app->ruta->post('usuario/agregar', [UsuariosController::class, 'agregar']);
$app->ruta->post('usuario/crear', [UsuariosGeneralesController::class, 'agregar']);
$app->ruta->post('empresa/crear', [EmpresasController::class, 'agregar']);
$app->ruta->post('session/login', [SessionGeneralesController::class, 'login']);


$app->ruta->post('cliente/login', [UsuariosController::class, 'AgregarUsuarios']);


$app->ruta->get('inicio', 'inicio');
$app->ruta->get('autologin', [SessionGeneralesController::class, 'autoLogin']);
$app->ruta->get('logout', [SessionGeneralesController::class, 'logout']);
$app->ruta->get('/', 'login');

// Ruta EJECUTA
$app->Run(true);





<?php

namespace armando\controller;

use armando\core\Controller;
use armando\core\Session;
use armando\corelib\GenerarToken;
use armando\models\Usuarios;
use armando\core\Request;

class SessionController extends Controller {

    public function login() {


        /* Session::inicio(false);
          Session::setValue('id', 1);
          Session::imprimirSession(); */
    }

    public function register(Request $request) {
        $usuario = Usuarios::setDataCreate($request->parametrosJson());
        $token = new GenerarToken();
        $clave = $token->Encriptar($usuario->getContrasena());
        $usuario->setContrasena($clave);
        $resultado = $usuario->create();
        return $this->json($resultado);
    }

}

<?php

namespace armando\controller;

use armando\core\Controller;
use armando\core\Session;
use armando\corelib\GenerarToken;
use armando\core\Request;
use armando\models\UsuariosGenerales;

class SessionGeneralesController extends Controller {

    public function login(Request $request) {
        $token=new GenerarToken();
        $datos=$request->parametrosJson();
        $datos->password=$token->TokenUnico($datos->password);
        $usuario=UsuariosGenerales::select()->where([["correo",$datos->correo],["password",$datos->password]])->run();
        $datos;
        Session::inicio(false);
        Session::setValue('id', 1);
        Session::imprimirSession(); 
    }

    public function register(Request $request) {
        $usuario = UsuariosGenerales::setDataCreate($request->parametrosJson());
        $token = new GenerarToken();
        $clave = $token->Encriptar($usuario->getContrasena());
        $usuario->setContrasena($clave);
        $resultado = $usuario->create();
        return $this->json($resultado);
    }

}

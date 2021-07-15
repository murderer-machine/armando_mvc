<?php

namespace hardmvc\controller;

use hardmvc\core\Controller;
use hardmvc\core\Session;
use hardmvc\corelib\GenerarToken;
use hardmvc\core\Request;
use hardmvc\models\UsuariosGenerales;

class SessionGeneralesController extends Controller {

    public function login(Request $request) {
        $token = new GenerarToken();
        $datos = $request->parametrosJson();
        $datos->password = $token->TokenUnico($datos->password);
        $usuario = UsuariosGenerales::select()->where([["correo", $datos->correo], ["password", $datos->password]])->run()->datos();
        if (!empty($usuario)) {
            Session::inicio($datos->recordar);
            Session::setValue('id', $token->Encriptar($usuario[0]["id"]));
            return true;
        } else {
            return false;
        }
    }

    public function autoLogin() {
        $token = new GenerarToken();
        Session::inicio();
        Session::setValue('id', $token->Encriptar(1));
        echo $this->SessionID();
    }

    public function SessionID() {
        $id = Session::getValue('id');
        $token = new GenerarToken();
        $usuario = UsuariosGenerales::getById($token->Desencriptar($id));
        return $usuario;
    }

    public function logout() {
        return Session::destroy() ? true : false;
    }

}

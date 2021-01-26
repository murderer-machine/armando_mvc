<?php

namespace armando\controller;

use armando\core\Aplicacion;
use armando\core\Controller;
use armando\core\Session;
use armando\corelib\GenerarToken;
use armando\core\Request;
use armando\models\UsuariosGenerales;

class SessionGeneralesController extends Controller {

    public function login(Request $request) {
        $token = new GenerarToken();
        $datos = $request->parametrosJson();
        $datos->password = $token->TokenUnico($datos->password);
        $usuario = UsuariosGenerales::select()->where([["correo", $datos->correo], ["password", $datos->password]])->run()->datos();
        if (!empty($usuario)) {
            Session::inicio($datos->recordar);
            Session::setValue('id', $token->Encriptar($usuario[0]["id"]));
            return $this->json($resultado["error"] = 1);
        } else {
            return $this->json($resultado["error"] = 0);
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
        return Session::destroy() ? $this->json($resultado["error"] = 1) : $this->json($resultado["error"] = 0);
    }

}

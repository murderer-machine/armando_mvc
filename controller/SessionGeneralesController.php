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
            Session::setValue('id', $usuario[0]["id"]);
            Session::setValue('usuario', $usuario[0]["usuario"]);
            Session::setValue('correo', $usuario[0]["correo"]);
            return $this->json($resultado["error"] = 1);
        } else {
            $usuario = UsuariosGenerales::select()->where([["correo", $datos->correo]])->run()->datos();
            return empty($usuario) ? $this->json($resultado["error"] = 2) : $this->json($resultado["error"] = 3);
        }
    }

    public function logout() {
        return Session::destroy() ? $this->json($resultado["error"] = 1) : $this->json($resultado["error"] = 0);
    }
    

}

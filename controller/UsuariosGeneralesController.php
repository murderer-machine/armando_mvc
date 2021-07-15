<?php

namespace hardmvc\controller;

use hardmvc\core\Controller;
use hardmvc\models\UsuariosGenerales;
use hardmvc\core\Request;
use hardmvc\corelib\GenerarToken;

class UsuariosGeneralesController extends Controller{
   public function agregar(Request $request) {
        $usuarios = UsuariosGenerales::setDataCreate($request->parametrosJson());
        $token = new GenerarToken();
        $clave = $token->TokenUnico($usuarios->getPassword());
        $usuarios->setPassword($clave);
        $respuesta = $usuarios->create();
        return $this->json($respuesta['error']);
    }

    public function mostrar() {
        $usuarios = UsuariosGenerales::select()->run()->datos(true);
        print_r($usuarios);
    }

    public function update(Request $request) {
        $usuarios = UsuariosGenerales::getById($request->parametros()['id']);
        $usuarios->setDataUpdate($request->parametros());
        $respuesta = $usuarios->update();
        return $respuesta['error'] === 1 ? 'error' : 'modificado ';
    }

    public function delete(Request $request) {
        $usuarios = UsuariosGenerales::getById($request->parametros()['id']);
        $respuesta = $usuarios->delete($request);
        return $respuesta['error'] === 1 ? 'error' : 'eliminado ';
    }   
}

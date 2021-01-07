<?php

namespace armando\controller;

use armando\core\Controller;
use armando\models\UsuariosGenerales;
use armando\core\Request;

class UsuariosGeneralesController extends Controller{
   public function agregar(Request $request) {
       /* $usuarios = UsuariosGenerales::setDataCreate($request->parametrosJson());
        $respuesta = $usuarios->create();
        return $this->json($respuesta['error']);*/
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

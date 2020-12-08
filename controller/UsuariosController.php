<?php

namespace armando\controller;

use armando\core\Controller;
use armando\core\Request;
use armando\models\Usuarios;

class UsuariosController extends Controller {

    public function agregar(Request $request) {
        $usuarios = Usuarios::setDataCreate($request->parametrosJson());
        $usuarios->setContrasena(md5($usuarios->getContrasena()));
        $respuesta = $usuarios->create();
        return $respuesta['error'] === 1 ? 'error' : 'creado ';
    }

    public function mostrar() {
        $usuarios1 = Usuarios::select()->run()->datos(true);
        print_r($usuarios1);
    }

    public function update(Request $request) {
        $usuarios = Usuarios::getById($request->parametros()['id']);
        $usuarios->setDataUpdate($request->parametros());
        $respuesta = $usuarios->update();
        return $respuesta['error'] === 1 ? 'error' : 'modificado ';
    }

    public function delete(Request $request) {
        $usuarios = Usuarios::getById($request->parametros()['id']);
        $respuesta = $usuarios->delete($request);
        return $respuesta['error'] === 1 ? 'error' : 'eliminado ';
    }

    public function generar() {
        for ($index = 0; $index < 5000; $index++) {
            $usuario = new Usuarios("nombre raul $index", "apellidos raul $index", "$index", "$index");
            $usuario->create();
        }
    }

}

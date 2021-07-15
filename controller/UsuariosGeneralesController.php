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
        $usuarios->setEstado(1);
        $usuarios->setFecha_creacion(fecha_hora);        
        $respuesta = $usuarios->create();
        return $this->json($respuesta);
    }

    public function mostrar() {
        $usuarios = UsuariosGenerales::select()->run()->datos(true);
        print_r($usuarios);
    }

    public function update(Request $request) {
        $usuarios = UsuariosGenerales::getById($request->parametros()['id']);
        $usuarios->setDataUpdate($request->parametros());
        $respuesta = $usuarios->update();
        return $this->json($respuesta);
    }

    public function delete(Request $request) {
        $usuarios = UsuariosGenerales::getById($request->parametros()['id']);
        $respuesta = $usuarios->delete($request);
        return $this->json($respuesta);
    }   
}

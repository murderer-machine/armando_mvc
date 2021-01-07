<?php

namespace armando\controller;

use armando\core\Controller;
use armando\models\Empresas;
use armando\core\Request;
use armando\corelib\GenerarToken;

class EmpresasController extends Controller{
   public function agregar(Request $request) {
        $empresas = Empresas::setDataCreate($request->parametrosJson());
        $respuesta = $empresas->create();
        return $this->json($respuesta['error']);
    }

    public function mostrar() {
        $empresas = Empresas::select()->run()->datos(true);
        print_r($empresas);
    }

    public function update(Request $request) {
        $empresas = Empresas::getById($request->parametros()['id']);
        $empresas->setDataUpdate($request->parametros());
        $respuesta = $empresas->update();
        return $respuesta['error'] === 1 ? 'error' : 'modificado ';
    }

    public function delete(Request $request) {
        $empresas = Empresas::getById($request->parametros()['id']);
        $respuesta = $empresas->delete($request);
        return $respuesta['error'] === 1 ? 'error' : 'eliminado ';
    }   
}

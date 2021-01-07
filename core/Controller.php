<?php

namespace armando\core;
use armando\core\Session;
class Controller {

    public function json($value) {
        return json_encode($value, JSON_PRETTY_PRINT);
    }
    public function render($vista,$parametros=[]){
        return Aplicacion::$app->ruta->vistaPlantilla($vista,$parametros);
    }
    public function verificarSesion(){
        if(Session::exist()){
            header("Location: https://localhost/armando_mvc/public/");
        }else{
            header("Location: https://localhost/armando_mvc/public/sesion/login");
        }
    }
}

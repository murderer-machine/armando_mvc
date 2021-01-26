<?php

namespace armando\core;

use armando\core\Session;

class Controller {

    public function json($value) {
        return json_encode($value, JSON_PRETTY_PRINT);
    }

    public function render($vista, $parametros = []) {
        return Aplicacion::$app->ruta->vistaPlantilla($vista, $parametros);
    }

    public static function VerificaSession() {
        Session::exist() ?: header('Location: /');
    }

    public static function VerificarSessionAuth() {
        Session::exist() ? header('Location: /inicio') : '';
    }

}

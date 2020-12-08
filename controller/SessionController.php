<?php

namespace armando\controller;

use armando\core\Controller;
use armando\core\Session;

class SessionController extends Controller {

    public function inicio() {

        Session::inicio(false);
        Session::setValue('id', 1);
        Session::imprimirSession();
      
    }

    public function salir() {
        Session::destroy();
    }

    public function pregunta() {
   Session::imprimirSession();
        echo Session::exist() ? 'existe' : 'no existe';
    }

}

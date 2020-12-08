<?php

namespace armando\controller;

use armando\core\Controller;
use armando\core\Session;

class SessionController extends Controller {

    public function inicio() {
        Session::inicio();
        Session::setValue('id', 2);
    }

    public function salir() {
        Session::destroy();
    }

    public function pregunta() {
      Session::exist();
    }

}

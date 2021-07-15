<?php

namespace hardmvc\controller_clientes;

use hardmvc\core\Controller;
use hardmvc\models_clientes\Usuarios;

class UsuariosController extends Controller {

    public function AgregarUsuarios() {
        $usuarios = new Usuarios('juanito', 'perez');
        $resultado = $usuarios->create();
    }

  

}

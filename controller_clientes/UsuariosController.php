<?php

namespace armando\controller_clientes;

use armando\core\Controller;
use armando\models_clientes\Usuarios;

class UsuariosController extends Controller {

    public function AgregarUsuarios() {
        $usuarios = new Usuarios('juanito', 'perez');
        $resultado = $usuarios->create();
    }

  

}

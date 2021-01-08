<?php
namespace armando\controller_clientes\c45463902;
use armando\core\Controller;
use armando\models_clientes\c45463902\Usuarios;
class UsuariosController extends Controller{
   public function AgregarUsuarios(){
       $usuarios = new Usuarios('juanito', 'perez');
       $resultado = $usuarios->create();
   }
}

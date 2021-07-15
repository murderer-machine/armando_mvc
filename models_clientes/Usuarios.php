<?php

namespace hardmvc\models_clientes;

use hardmvc\core\ModelCliente;

class Usuarios extends ModelCliente {

    protected static $table = 't_usuarios';
    protected $id = null;
    protected $nombres;
    protected $apellidos;

    function __construct($nombres, $apellidos) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }

    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombres($nombres): void {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

}

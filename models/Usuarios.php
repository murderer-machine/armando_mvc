<?php

namespace armando\models;

use armando\core\Model;

class Usuarios extends Model {

    protected static $table = 't_usuarios';
    protected $id = null;
    protected $nombres;
    protected $apellidos;
    protected $usuario;
    protected $contrasena;

    function __construct($nombres, $apellidos, $usuario, $contrasena) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
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

    function getUsuario() {
        return $this->usuario;
    }

    function getContrasena() {
        return $this->contrasena;
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

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

}

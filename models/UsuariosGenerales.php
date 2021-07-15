<?php

namespace hardmvc\models;

use hardmvc\core\Model;

class UsuariosGenerales extends Model {

    protected static $table = 'usuarios';
    public $id;
    public $id_usuario;
    public $password;
    public $estado;
    public $fecha_creacion;

    public function __construct($id, $id_usuario, $password, $estado, $fecha_creacion) {
        $this->id = $id;
        $this->id_usuario = $id_usuario;
        $this->password = $password;
        $this->estado = $estado;
        $this->fecha_creacion = $fecha_creacion;
    }

    public function getId() {
        return $this->id;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getFecha_creacion() {
        return $this->fecha_creacion;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setId_usuario($id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setFecha_creacion($fecha_creacion): void {
        $this->fecha_creacion = $fecha_creacion;
    }

}

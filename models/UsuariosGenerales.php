<?php

namespace hardmvc\models;

use hardmvc\core\Model;

class UsuariosGenerales extends Model {

    protected static $table = 't_usuarios_generales';
    protected $id = null;
    public $id_empresa;
    public $usuario;
    public $usuario_bd;
    public $password_bd;
    public $correo;
    public $password;
    protected $token;
    public $estado;
    public $fh_pago;
    protected $fh_creacion = fecha;
    protected $id_personal = 1;

    function __construct($id_empresa, $usuario, $usuario_bd, $password_bd, $correo, $password, $token, $estado, $fh_pago) {
        $this->id_empresa = $id_empresa;
        $this->usuario = $usuario;
        $this->usuario_bd = $usuario_bd;
        $this->password_bd = $password_bd;
        $this->correo = $correo;
        $this->password = $password;
        $this->token = $token;
        $this->estado = $estado;
        $this->fh_pago = $fh_pago;
    }

    function getId() {
        return $this->id;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getUsuario_bd() {
        return $this->usuario_bd;
    }

    function getPassword_bd() {
        return $this->password_bd;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPassword() {
        return $this->password;
    }

    function getToken() {
        return $this->token;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFh_pago() {
        return $this->fh_pago;
    }

    function getFh_creacion() {
        return $this->fh_creacion;
    }

    function getId_personal() {
        return $this->id_personal;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setId_empresa($id_empresa): void {
        $this->id_empresa = $id_empresa;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setUsuario_bd($usuario_bd): void {
        $this->usuario_bd = $usuario_bd;
    }

    function setPassword_bd($password_bd): void {
        $this->password_bd = $password_bd;
    }

    function setCorreo($correo): void {
        $this->correo = $correo;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setToken($token): void {
        $this->token = $token;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setFh_pago($fh_pago): void {
        $this->fh_pago = $fh_pago;
    }

    function setFh_creacion($fh_creacion): void {
        $this->fh_creacion = $fh_creacion;
    }

    function setId_personal($id_personal): void {
        $this->id_personal = $id_personal;
    }

}

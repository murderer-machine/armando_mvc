<?php

namespace hardmvc\models;

use hardmvc\core\Model;

class Empresas extends Model {

    protected static $table = 't_empresas';
    protected $id = null;
    protected $id_tipo_doc;
    protected $id_personal = 1;
    protected $id_ubigeo;
    protected $id_giro_comercial;
    protected $nro_doc;
    protected $razon_nombre;
    protected $nombre_comercial;
    protected $referencia;
    protected $aniversario_cumple;
    protected $fh_creacion = fecha_hora;

    function __construct($id_tipo_doc, $id_ubigeo, $id_giro_comercial, $nro_doc, $razon_nombre, $nombre_comercial, $referencia, $aniversario_cumple, $fh_creacion) {
        $this->id_tipo_doc = $id_tipo_doc;
        $this->id_ubigeo = $id_ubigeo;
        $this->id_giro_comercial = $id_giro_comercial;
        $this->nro_doc = $nro_doc;
        $this->razon_nombre = $razon_nombre;
        $this->nombre_comercial = $nombre_comercial;
        $this->referencia = $referencia;
        $this->aniversario_cumple = $aniversario_cumple;
        $this->fh_creacion = $fh_creacion;
    }

    function getId() {
        return $this->id;
    }

    function getId_tipo_doc() {
        return $this->id_tipo_doc;
    }

    function getId_personal() {
        return $this->id_personal;
    }

    function getId_ubigeo() {
        return $this->id_ubigeo;
    }

    function getId_giro_comercial() {
        return $this->id_giro_comercial;
    }

    function getNro_doc() {
        return $this->nro_doc;
    }

    function getRazon_nombre() {
        return $this->razon_nombre;
    }

    function getNombre_comercial() {
        return $this->nombre_comercial;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getAniversario_cumple() {
        return $this->aniversario_cumple;
    }

    function getFh_creacion() {
        return $this->fh_creacion;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setId_tipo_doc($id_tipo_doc): void {
        $this->id_tipo_doc = $id_tipo_doc;
    }

    function setId_personal($id_personal): void {
        $this->id_personal = $id_personal;
    }

    function setId_ubigeo($id_ubigeo): void {
        $this->id_ubigeo = $id_ubigeo;
    }

    function setId_giro_comercial($id_giro_comercial): void {
        $this->id_giro_comercial = $id_giro_comercial;
    }

    function setNro_doc($nro_doc): void {
        $this->nro_doc = $nro_doc;
    }

    function setRazon_nombre($razon_nombre): void {
        $this->razon_nombre = $razon_nombre;
    }

    function setNombre_comercial($nombre_comercial): void {
        $this->nombre_comercial = $nombre_comercial;
    }

    function setReferencia($referencia): void {
        $this->referencia = $referencia;
    }

    function setAniversario_cumple($aniversario_cumple): void {
        $this->aniversario_cumple = $aniversario_cumple;
    }

    function setFh_creacion($fh_creacion): void {
        $this->fh_creacion = $fh_creacion;
    }

}

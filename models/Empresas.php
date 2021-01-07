<?php

namespace armando\models;

use armando\core\Model;

class Usuarios extends Model {

    protected static $table = 't_empresas';
    protected $id = null;
    protected $id_tipo_doc;
    protected $id_personal=1;
    protected $id_ubigeo;
    protected $id_giro_comercial;
    protected $nro_doc;
    protected $razon_nombre;
    protected $nombre_comercial;
    protected $referencia;
    protected $aniversario_cumple;
    protected $fh_creacion=fecha_hora;

    
}

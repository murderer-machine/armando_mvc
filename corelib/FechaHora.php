<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace alekas\corelib;

/**
 * Class Constantes
 *
 * @author Marco Antonio Rodriguez Salinas <alekas_oficial@hotmail.com>
 */
class FechaHora {

    public function __construct() {
        date_default_timezone_set('America/lima');
        setlocale(LC_ALL, 'es_PE.UTF-8');
        define('fecha', date("Y-m-d"));
        define('hora', date("H:i:s"));
        define('hora_', date("H:i"));
        define('fecha_hora', date("Y-m-d H:i:s"));
    }

}

<?php

namespace hardmvc\corelib;

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

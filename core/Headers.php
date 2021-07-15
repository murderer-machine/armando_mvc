<?php

namespace hardmvc\core;

class Headers {

    public function __construct() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept,application/json");
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
    }

}

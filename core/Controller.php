<?php

namespace armando\core;

/**
 * Class Controller
 * 
 * @author Marco Antonio Rodriguez Salinas <alekas_oficial@outlook.com>
 * @package app\core
 */
class Controller {

    public function json($value) {
        return json_encode($value, JSON_PRETTY_PRINT);
    }

}

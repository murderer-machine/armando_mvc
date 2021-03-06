<?php

namespace hardmvc\core;

class Aplicacion {

    public static Aplicacion $app;
    public static string $root;
    public static string $root_principal;
    public Ruta $ruta;
    public Request $request;
    public Controller $controller;
    public Session $session;
    public Headers $headers;

    public function __construct($root, $root_principal) {
        $this->headers = new Headers();
        self::$root = $root;
        self::$root_principal = $root_principal;
        self::$app = $this;
        $this->session = new Session();
        $this->request = new Request(self::$root);
        $this->ruta = new Ruta($this->request);
        require "$root_principal/core/VariablesGlobales.php";
    }

    public function Run($tiempo = false) {
        echo $this->ruta->Resolver();
    }

}

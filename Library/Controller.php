<?php

class Controller {

    public $model;
    public $view;

    function __construct() {
        Session::start();
        $this->model = "";
        $this->view = new View();
        $this->loadClassModels();
    }

    public function loadClassModels() {
        $model = get_class($this) . "Model";
        $path = MODELS . $model . ".php";
        if (file_exists($path)) {
            require $path;
            $this->model = new $model();
        }
    }
}

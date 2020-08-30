<?php

class View {

    function __construct() {
    }

    public function render($path, $data = "") {
        require VIEWS . 'header.php';
        require VIEWS . $path . '.php';
        require VIEWS . 'footer.php';
    }
}

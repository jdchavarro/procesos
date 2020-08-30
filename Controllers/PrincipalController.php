<?php

class PrincipalController extends Controller {

    public function home() {
        if (Session::getSession("Admin") == USUARIO) {
            $this->view->render("home");
        } else {
            header("Location: " . URL);
        }
    }
}

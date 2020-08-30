<?php
error_reporting(E_ALL ^ E_NOTICE);
class IndexController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        if (Session::getSession("Admin") == USUARIO) {
            header("Location: " . URL . "Principal/home");
        } else {
            $argumentos = func_get_args();
            $error = isset($argumentos[0]) ? $argumentos[0] : "";
            $this->view->render("index", $error);
        }
    }

    public function logIn() {

        if (Session::getSession("Admin") == USUARIO) {
            header("Location: " . URL . "Principal/home");
        } else {
            if (isset($_POST['user']) && isset($_POST['password'])) {
                if ($_POST['user'] == USUARIO && $_POST['password'] == "admin") {
                    Session::setSession('Admin', $_POST['user']);
                    header("Location: " . URL . "Principal/home");
                } else {
                    $error = "Usuario o Contraseña erroneos";
                    header("Location: " . URL . "Index/index/" . $error);
                }
            } else {
                header("Location: " . URL);
            }
        }
    }

    public function logOut() {
        Session::destroy();
        header("Location: " . URL);
    }
}

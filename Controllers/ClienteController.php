<?php

class ClienteController extends Controller {

    /* Muestra los clientes existentes y las opciones del CRUD */
    public function index() {
        if (Session::getSession("Admin") == USUARIO) {
            $clientes = $this->model->all();
            $this->view->render("clientes/index", $clientes);
        } else {
            header("Location: " . URL);
        }
    }

    /* Muestra el formulario para crear un cliente */
    public function crear() {
        if (Session::getSession("Admin") == USUARIO) {
            $this->view->render("clientes/crear");
        } else {
            header("Location: " . URL);
        }
    }

    /* Almacena la informacion de un nuevo cliente en la DB */
    public function almacenar() {
        if (Session::getSession("Admin") == USUARIO && isset($_POST['cedulaCliente'])) {

            $busqueda = $this->model->encontrar("cedula=" . $_POST['cedulaCliente']);
            if ($busqueda == NULL) {
                $cliente['cedula'] = $_POST['cedulaCliente'];
                $cliente['nombre'] = $_POST['nombreCliente'];
                $cliente['telefono'] = $_POST['telefonoCliente'];
                $cliente['direccion'] = $_POST['direccionCliente'];
                $cliente['email'] = $_POST['emailCliente'];

                if ($this->model->registrar($cliente)) {
                    /* USUARIO CREADO */
                    header("Location: " . URL . "Cliente/index");
                } else {
                    /* ERROR AL CREAR USUARIO */
                }
            } else {
                /* USUARIO REGISTRADO */
            }
        } else {
            header("Location: " . URL);
        }
    }

    /* Muestra el formulario para modificar un cliente */
    public function actualizar($id) {
        if (Session::getSession("Admin") == USUARIO) {
            $cliente = $this->model->encontrar("id=" . $id);
            $this->view->render("clientes/actualizar", $cliente);
        } else {
            header("Location: " . URL);
        }
    }

    /* Modifica la informacion del cliente en la DB */
    public function modificar() {
        if (Session::getSession("Admin") == USUARIO && isset($_POST['idCliente'])) {

            $cliente['nombre'] = $_POST['nombreCliente'];
            $cliente['telefono'] = $_POST['telefonoCliente'];
            $cliente['direccion'] = $_POST['direccionCliente'];
            $cliente['email'] = $_POST['emailCliente'];

            if ($this->model->modificar($cliente, $_POST['idCliente'])) {
                /* USUARIO MODIFICADO */
                header("Location: " . URL . "Cliente/index");
            } else {
                /* ERROR AL MODIFICAR USUARIO */
                echo "ERROR MODIFICANDO USUARIO";
            }
        } else {
            header("Location: " . URL);
        }
    }

    /* Muestra el formulario para borrar un cliente */
    public function borrar($id) {
        if (Session::getSession("Admin") == USUARIO) {
            $cliente = $this->model->encontrar("id=" . $id);
            $this->view->render("clientes/borrar", $cliente);
        } else {
            header("Location: " . URL);
        }
    }

    /* Elimina la informacion del cliente en la DB */
    public function eliminar() {
        if (Session::getSession("Admin") == USUARIO && isset($_POST['idCliente'])) {

            if ($this->model->eliminar($_POST['idCliente'])) {
                /* USUARIO ELIMINADO */
                header("Location: " . URL . "Cliente/index");
            } else {
                /* ERROR AL ELIMINAR USUARIO */
                echo "ERROR ELIMINANDO USUARIO";
            }
        } else {
            header("Location: " . URL);
        }
    }
}

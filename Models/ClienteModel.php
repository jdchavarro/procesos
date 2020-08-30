<?php

class ClienteModel extends Conexion {

    function __construct() {
        parent::__construct();
    }

    public function all() {
        return $this->db->selectAll("*", "clientes");
    }

    public function encontrar($where) {
        return ($this->db->selectWhere("*", "clientes", $where))[0];
    }

    public function registrar($cliente) {
        return $this->db->insert("clientes", $cliente);
    }

    public function modificar($cliente, $idCliente) {
        return $this->db->update("clientes", $cliente, "id=" . $idCliente);
    }

    public function eliminar($idCliente) {
        return $this->db->delete("clientes", "id=" . $idCliente);
    }
}

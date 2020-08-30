<?php

class QueryManager {

    private $link;

    function __construct($host, $user, $pass, $dbname) {
        $this->link = new mysqli($host, $user, $pass, $dbname);

        if ($this->link->connect_errno) {
            echo "Error de Conexion: " . $this->link->connect_error;
        }
    }

    public function selectAll($atributo, $tabla) {
        $consulta = "SELECT " . $atributo . " FROM " . $tabla;
        $resultado = $this->link->query($consulta);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $respuesta[] = $fila;
            }
            return $respuesta;
        }
    }

    public function selectWhere($atributo, $tabla, $where) {
        $consulta = "SELECT " . $atributo . " FROM " . $tabla . " WHERE " . $where;
        $resultado = $this->link->query($consulta);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $respuesta[] = $fila;
            }
            return $respuesta;
        }
    }

    public function insert($tabla, $registro) {
        $columnas = null;
        $valores = null;
        foreach ($registro as $columna => $valor) {
            $columnas .= $columna . ',';
            $valores .= "'" . $valor . "',";
        }
        /* Eliminamos la ultima coma (,) */
        $columnas = substr($columnas, 0, -1);
        $valores = substr($valores, 0, -1);

        $consulta = "INSERT INTO " . $tabla . " (" . $columnas . ") VALUES (" . $valores . ")";
        return $this->link->query($consulta);
    }

    public function update($tabla, $registro, $where) {
        $valores = "";
        foreach ($registro as $columna => $valor) {
            $valores .= $columna . "='" . $valor . "',";
        }
        $valores = substr($valores, 0, -1);
        $consulta = "UPDATE " . $tabla . " SET " . $valores . " WHERE " . $where;
        return $this->link->query($consulta);
    }

    public function delete($tabla, $where) {
        $consulta = "DELETE FROM $tabla WHERE $where";
        return $this->link->query($consulta);
    }
}

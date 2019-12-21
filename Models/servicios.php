<?php
// Incluir la clase que maneja la base de datos
require 'connection.php';
class servicios
{
    // Atributos
    private $id;
    public $nombre;
    public $detalle;
    public $precioPorHora;
    public $img;

    public function __construct($pnombre = '', $pdetalle = '', $pprecioPorHora = '', $pid = 0, $pimg = '')
    {
        $this->id = $pid;
        $this->nombre = $pnombre;
        $this->detalle = $pdetalle;
        $this->precioPorHora = $pprecioPorHora;
        $this->img = $pimg;
    }

    /**
     * Inserta un elemento en la base datos usando la tabla servicios
     * @param servicios $servicios Objeto de tipo servicios
     * @return boolean si fue exitoso el insert
     */
    public function insert(servicios $servicios)
    {
        try {
            // Abro la base de datos
            $conect = new Connection();
            $pdo = $conect->openConnection();
            // EJECUTAR SENTENCIA
            $query = "INSERT INTO servicios (nombre, detalle, precioPorHora) VALUES ('" . $servicios->nombre . "','" . $servicios->detalle . "','" . $servicios->precioPorHora . "') ";
            if ($pdo->query($query)) {
                return true;
            }
        } catch (Exception $exc) {
            error_log("Error en la " . __FUNCTION__ . ":" . $exc->getTraceAsString());
        }
        return false;
    }

    /**
     * Selecciona uno o todos los elementos dentro de la tabla servicios
     * @param int $id Optional nos indica sobre cual elemento iterar
     * @return boolean
     */
    public function select($id = 0)
    {
        try {
            $conect = new Connection();
            $pdo = $conect->openConnection();
            $query = "SELECT id, nombre, detalle, precioPorHora FROM servicios";
            if ($id) {
                $query .= " WHERE id='$id'";
            }
            $result = $pdo->query($query);
            $rows = [];
            while ($row = $result->fetch()) {
                $rows[] = new servicios($row['nombre'], $row['detalle'], $row['precioPorHora'], $row['id']);
            }
            return $rows;
        } catch (Exception $ex) {
            // Captura de error
            print_r($ex->getTraceAsString());
            error_log("Error en la " . __FUNCTION__ . ":" . $ex->getTraceAsString());
        }
        return false;
    }

    /**
     * Elimina un elemento de la tabla servicios
     * @param type $id
     * @return boolean
     */
    public function delete($id)
    {
        try {
            $conect = new Connection();
            $pdo = $conect->openConnection();
            $query = "DELETE FROM servicios WHERE id=$id";
            //Preparar el query a ejecutar
            $result = $pdo->prepare($query);
            // Si se logro ejecutar con exito
            if ($result->execute()) {
                return true;
            }
        } catch (Exception $ex) {
            // Captura de error
            error_log("Error en la " . __FUNCTION__ . ":" . $ex->getTraceAsString());
        }
        // En caso de llegar a esta linea significa que existio algun error
        return false;
    }

    /**
     * Obtener cualquier parametro por nombre sin importar privacidad
     * @param string $name nombre del parametro
     * @return valor del parametro
     */
    public function get_element($name)
    {
        return $this->$name;
    }

    /**
     * Actualiza un elemento en la base datos usando la tabla servicios
     * @param servicios $servicios Objeto de tipo servicios
     * @return boolean si fue exitoso el insert
     */
    public function update(servicios $servicios)
    {
        try {
            // Abro la base de datos
            $conect = new Connection();
            $pdo = $conect->openConnection();
            // EJECUTAR SENTENCIA
            $query = "UPDATE servicios SET nombre = '" . $servicios->nombre . "', detalle ='" . $servicios->detalle . "', precioPorHora = '" . $servicios->precioPorHora . "' WHERE id=$servicios->id";
            if ($pdo->query($query)) {
                return true;
            }
        } catch (Exception $exc) {
            error_log("Error en la " . __FUNCTION__ . ":" . $exc->getTraceAsString());
        }
        return false;
    }
}

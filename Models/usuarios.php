<?php

require "connection.php";

class usuario
{
    private $id;
    public $usuario;
    public $contrasena;
    public function login($usuario, $contrasena)
    {
        $connection = new Connection();
        $db = $connection->openConnection();
        $stmt = $db->query("SELECT usuario FROM usuarios where usuario='$usuario' and contrasena='$contrasena'");
        while ($record = $stmt->fetch()) {
            $_SESSION['usuario'] = $record;
            return true;
        }
        return false;
    }

}

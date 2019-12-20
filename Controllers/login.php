<?php

if ($_POST) {
    require "Models/usuarios.php";
    $usuario = new usuario();
    if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
        $usuario->login($_POST['usuario'], $_POST['contrasena']);
    }
}
require "Views/login.php";

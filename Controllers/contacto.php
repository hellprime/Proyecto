<?php
require 'Models/contacto.php';

if (isset($_POST['razon'])) {
    if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])) {
        $DatosCliente = new DatosCliente($_POST['nombre'], $_POST['correo'], $_POST['razon'], $_POST['mensaje']);
        if ($DatosCliente->EnvioDatos($DatosCliente)) {
            require 'Views/gracias.php';
        } else {
            $msg = "Error al enviar el formulario";
            require 'index.php';
        }
    } else {
        require 'index.php';
    }
} else if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])) {
    $DatosCliente = new DatosCliente($_POST['nombre'], $_POST['correo'], $_POST['mensaje']);
    if ($DatosCliente->EnvioDatos($DatosCliente)) {
        require 'Views/gracias.php';
    } else {
        $msg = "Error al enviar el formulario";
        require 'index.php';
    }
} else {
    require 'index.php';
}

<?php

require 'Models/servicios.php';
switch ($action) {

    case 'listado':
        $servicios = new servicios();
        $elements = $servicios->select();
        require 'Views/serviciosLista.php';
        break;

    case 'agregar':
        if (isset($_POST['nombre']) && isset($_POST['detalle']) && isset($_POST['precio'])) {
            $servicios = new servicios($_POST['nombre'], $_POST['detalle'], $_POST['precio']);
            if ($servicios->insert($servicios)) {
                $msg = "Exito al guardar el producto";
                $elements = $servicios->select();
                require 'Views/serviciosLista.php';
            } else {
                $msg = "Error al guardar el producto";
                require 'Views/serviciosFormulario.php';
            }
        } else {
            require 'Views/serviciosFormulario.php';
        }
        break;

    case 'editar':
        if (isset($_POST['nombre']) && isset($_POST['detalle']) && isset($_POST['precio']) && isset($_POST['id'])) {
            $servicios = new servicios($_POST['nombre'], $_POST['detalle'], $_POST['precio'], $_POST['id']);
            if ($servicios->update($servicios)) {
                $msg = "Exito al actualizar el elemento:" . $_POST['nombre'];
                $elements = $servicios->select();
                require 'Views/serviciosLista.php';
            } else {
                $msg = "Error al guardar el valor";
            }
        } else {
            $servicios = new servicios();
            $element = $servicios->select($_GET['id'])[0];
            require 'Views/serviciosFormulario.php';
        }
        break;

    case 'ver':
        $servicios = new servicios();
        if (isset($_GET['id'])) {
            $element = $servicios->select($_GET['id'])[0];
            require 'Views/serviciosDetalle.php';
        } else {
            $msg = "Error al obtener el elemento";
            $elements = $servicios->select();
            require 'Views/serviciosLista.php';
        }
        break;

    case 'borrar':
        $servicios = new servicios();
        if (isset($_GET['id'])) {
            if ($servicios->delete($_GET['id'])) {
                $msg = "Elemento borrado";
            } else {
                $msg = "Error al Borrar el elemento";
            }
        }
        $elements = $servicios->select();
        require 'Views/serviciosLista.php';
        break;

    default:
        $servicios = new servicios();
        $elements = $servicios->select();
        require 'Views/serviciosLista.php';
        break;
}

<!DOCTYPE html>
<html lang="en" class=" -webkit-">

<head>
    <meta charset="UTF-8">
    <title>VET+ Sistema de contacto y soporte</title>
    <?php include 'Views/head.php';?>
</head>

<body>
    <?php require_once "Views/header.php";?>
    <?php
        if ($_GET) {
            require_once 'Controllers/' . $_GET['c'] . '.php';
        } else {
            require_once "Views/gracias.php";
        }
    ?>

    <footer class="py-4">
        <div class="container">
            <p>Creado por Jose Mendieta © Bahamonde | <a href="index.php">Inicio</a></p>
            <p>Proyecto final para la clase de Programacion 4.</p>
        </div>
    </footer>

</body>

</html>
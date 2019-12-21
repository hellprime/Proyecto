<!DOCTYPE html>
<html lang="en" class=" -webkit-">

<head>
    <meta charset="UTF-8">
    <title>VET+ La mejor veterinaria del pais</title>
    <?php include 'Views/head.php';?>
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <?php require_once 'Views/menu.php';?>
        <div class="container">
            <a href="index.php" class="navbar-brand d-flex align-items-center"><strong>VET+</strong></a>
        </div>
    </div>
    <div class="text-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h1>Carrito de compras</h1>
                    <p class="lead">Estos son los servicios agregados a tu carrito. Aqui podras completar tu compra</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
$action = (isset($_GET['c'])) ? $_GET['c'] : 'listado';
require_once __DIR__ . '/Controllers/carrito.php';
?>
    </div>
    <footer class="py-4">
        <div class="container">
            <p>Creado por Jose Mendieta © Bahamonde | <a href="index.php">Inicio</a></p>
            <p>Proyecto final para la clase de Programacion 4.</p>
        </div>
    </footer>
</body>

</html>
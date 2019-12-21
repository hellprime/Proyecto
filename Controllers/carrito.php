<?php

require 'Models/servicios.php';

$servicios = new servicios();
$elements = $servicios->select();
require 'Views/carrito.php';

<?php

require('../Models/Conexion.php');

$con = new Conexion();

$usuarios = $con->getTransacciones();

require('../Views/Transacciones.php');
?>
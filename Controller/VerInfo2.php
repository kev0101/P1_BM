<?php

require('../Models/Conexion.php');

$con = new Conexion();

$usuarios = $con->getTarjetas();

require('../Views/TarjetasC.php');
?>
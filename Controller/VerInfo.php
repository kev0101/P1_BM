<?php

require('../Models/Conexion.php');

$con = new Conexion();

$usuarios = $con->getCuentas();

require('../Views/CuentasB.php');
?>
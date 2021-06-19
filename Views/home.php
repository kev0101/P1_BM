<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="CSS/Img.css">
<script src="JS/jquery-2.1.4.min.js"></script>
<script src="JS/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<!-- Pagina Inicio -->
<div data-role="page" data-theme="b" id="PaginaInicio">

<!--PANEL-->
<div data-role="panel" data-display="overlay" id="menu"> 
    <ul data-role="listview">
        <img id="image" src="Img/Logo.png">
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="views/TCuenta.php">CUENTAS BANCARIAS</a></li>
        <li><a href="views/TTarjetas.php">TARJETAS DE CREDITO</a></li>
        <li><a href="views/TTransacciones.php">TRANSACCIONES</a></li>
        <li><a href="views/Pagos.php">PAGOS SERVICIOS</a></li>
        <li><a href="views/Gestiones.php">GESTIONES</a></li>
      </ul>
</div>
<!--PANEL-->

  <div data-role="header">
    <a data-icon="bars" data-iconpos="notext" href="#menu">Menu</a>
    <a data-icon="arrow-l" data-iconpos="notext" href="Models/logout.php">Atras</a>
  </div>

  <div data-role="main" class="ui-content">
    <div id="DatosInicio">
    <br>
    <br>
    <h1>Bienvenido <?php echo $user->getNombre();?></h1>
    </div>
  </div>

  <div data-role="footer">
   <h1>Footer</h1>
  </div>
</div> 
<!-- Pagina Inicio -->
</body>
</html>
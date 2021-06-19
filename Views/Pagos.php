<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../CSS/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="../CSS/Img.css">
<script src="../JS/jquery-2.1.4.min.js"></script>
<script src="../JS/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<!-- Pagina Inicio -->
<div data-role="page" data-theme="b" id="PaginaPagos">

<!--PANEL-->
<div data-role="panel" data-display="overlay" id="menu"> 
    <ul data-role="listview">
        <img id="image" src="../Img/Logo.png">
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="../Views/TCuenta.php">CUENTAS BANCARIAS</a></li>
        <li><a href="../views/TTarjetas.php">TARJETAS DE CREDITO</a></li>
        <li><a href="../views/TTransacciones.php">TRANSACCIONES</a></li>
        <li><a href="./Pagos.php">PAGOS SERVICIOS</a></li>
        <li><a href="./Gestiones.php">GESTIONES</a></li>
      </ul>
</div>
<!--PANEL-->

  <div data-role="header">
    <a data-icon="bars" data-iconpos="notext" href="#menu">Menu</a>
    <a data-icon="arrow-l" data-iconpos="notext" href="../index.php">Atras</a>
  </div>

  <div data-role="main" class="ui-content">
  <div >
  <a title="TELEFONIA" href="Telefonia.php" > <img src="../Img/TELEFONIA.png" width="100" height="100" style="margin-left: 15px;" /> </a>
  <a title="ELECTRICIDAD" href="Electricidad.php" >  <img src="../Img/ELECTRICIDAD.png" width="100" height="100" /> </a>
  <a title="ACUEDUCTOS" href="Acueductos.php" > <img src="../Img/ACUEDUCTOS.png" width="110" height="120" /> </a>
  </div>
  <div >
  <a title="MUNICIPALIDAD" href="Municipalidad.php" > <img src="../Img/MUNICI.png" width="100" height="100" style="margin-left: 50px; margin-top: 50px;" /> </a>
  <a title="INTERNET" href="Internet.php" > <img src="../Img/INTERNETT.png" width="100" height="100" style="margin-left: 20px;" /> </a>
  </div>
  </div>

  <div data-role="footer">
   <h1>Footer</h1>
  </div>
</div> 
<!-- Pagina Inicio -->
</body>
</html>
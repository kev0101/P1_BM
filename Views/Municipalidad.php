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
<!--Pagina Patentes-->
<div data-role="page" data-theme="b" id="Patentes">

  <div data-role="header">
    <div data-role="navbar">
      <ul>
        <li><a href="#Patentes" data-transition="slidefade">PATENTES</a></li>
        <li><a href="#Bienes" data-transition="slidefade">BIENES Y MUEBLES</a></li>
      </ul>
    </div>
  </div>

  <div data-role="main" class="ui-content">
  <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/MUNIC.png">
        <div data-role="controlgroup" data-type="horizontal">
        <br>
        <br> 
        <a href="#ALERT" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Realizar Pago</a>
        </div><br>
      </div>
  </div>

  <div data-role="footer">
   <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
  </div>
</div> 
<!--Pagina Patentes-->
<!-- Pagina Inicio -->

<!--Pagina Bienes-->
<div data-role="page" data-theme="b" id="Bienes">

  <div data-role="header">
    <div data-role="navbar">
      <ul>
        <li><a href="#Patentes" data-transition="slidefade">PATENTES</a></li>
        <li><a href="#Bienes" data-transition="slidefade">BIENES Y MUEBLES</a></li>
      </ul>
    </div>
  </div>

  <div data-role="main" class="ui-content">
  <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/MUNIC.png">
        <div data-role="controlgroup" data-type="horizontal">
        <br>
        <br> 
        <a href="#ALERT" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Realizar Pago</a>
        </div><br>
      </div>
  </div>

  <div data-role="footer">
   <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
  </div>
</div> 
<!--Pagina Bienes-->

<!--Alerta1-->
<div data-role="page" data-dialog="true" id="ALERT">

<div data-role="header">
    <h1>Electricidad</h1>
</div>

<div data-role="main" class="ui-content">
    <p>Ingrese información solicitada</p>
    <form method="post" action="demoform.asp">
        <div class="ui-field-contain">
            <label for="fullname">Numero De Abonado:</label>
            <input type="text" name="NumT" id="fullname" placeholder="506 00000000">
        </div>
    </form>
</div>

<div data-role="footer">
    <div data-role="navbar">
        <ul>
            <li><a href="#ALERT2" data-transition="flip">Continuar</a></li>
            <li><a href="#Patentes" data-transition="fade">Cancelar</a></li>
        </ul>
    </div>
</div>
</div>
<!--Alerta1-->
<!--Alerta2-->
<div data-role="page" data-dialog="true" id="ALERT2">
<div data-role="header">
    <h1>Electricidad</h1>
</div>

<div data-role="main" class="ui-content">
    <div>
        <p>#Factura: XXXXXXX</p>
        <p>Titular: XXXXXXX</p>
        <p>Vencimiento: XXXXXXX</p>
        <p>Monto: XXXXXXX</p>
    </div>
</div>

<div data-role="footer">
    <div data-role="navbar">
        <ul>
            <li><a href="#Patentes" data-transition="fade">OK</a></li>
        </ul>
    </div>
</div>
</div>
<!--Alerta2-->

</body>
</html>
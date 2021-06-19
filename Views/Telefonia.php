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
  <!--Pagina KOLBI-->
  <div data-role="page" data-theme="b" id="PaginaPagosK">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaPagosK" data-transition="slidefade">KOLBI</a></li>
          <li><a href="#PaginaPagosM" data-transition="slidefade">MOVISTAR</a></li>
          <li><a href="#PaginaPagosC" data-transition="slidefade">CLARO</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/KOLBI2.png">
        <div data-role="controlgroup" data-type="horizontal">
        <br>
        <br> 
          <a href="#ALERT" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Prepago</a>
          <a href="#ALERT3" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Pospago</a>
        </div><br>
      </div>


    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
    </div>
  </div>
  <!--Pagina KOLBI-->
  <!-- Pagina Inicio -->

  <!--Pagina MOVISTAR-->
  <div data-role="page" data-theme="b" id="PaginaPagosM">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaPagosK" data-transition="slidefade">KOLBI</a></li>
          <li><a href="#PaginaPagosM" data-transition="slidefade">MOVISTAR</a></li>
          <li><a href="#PaginaPagosC" data-transition="slidefade">CLARO</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
    <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/MOVISTAR.png">
        <div data-role="controlgroup" data-type="horizontal">
        <br>
        <br> 
          <a href="#ALERT" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Prepago</a>
          <a href="#ALERT3" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Pospago</a>
        </div><br>
      </div>
    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
    </div>
  </div>
  <!--Pagina MOVISTAR-->

  <!--Pagina CLARO-->
  <div data-role="page" data-theme="b" id="PaginaPagosC">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaPagosK" data-transition="slidefade">KOLBI</a></li>
          <li><a href="#PaginaPagosM" data-transition="slidefade">MOVISTAR</a></li>
          <li><a href="#PaginaPagosC" data-transition="slidefade">CLARO</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
    <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/CLARO.png">
        <div data-role="controlgroup" data-type="horizontal">
        <br>
        <br> 
          <a href="#ALERT" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Prepago</a>
          <a href="#ALERT3" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Pospago</a>
        </div><br>
      </div>
    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
    </div>
  </div>
  <!--Pagina CLARO-->


  <!--Alerta1Prepago-->
  <div data-role="page" data-dialog="true" id="ALERT">

    <div data-role="header">
      <h1>Prepago</h1>
    </div>

    <div data-role="main" class="ui-content">
      <p>Ingrese información solicitada</p>
      <form method="post" action="demoform.asp">
      <div class="ui-field-contain">
        <label for="fullname">Numero De Telefono:</label>
        <input type="text" name="NumT" id="fullname" placeholder="506 00000000">       
        <label for="email">Monto:</label>
        <input type="email" name="Monto" id="Monto" placeholder="Monto">
      </div>
    </form>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#ALERT2" data-transition="flip">Continuar</a></li>
          <li><a href="#PaginaPagosK" data-transition="fade">Cancelar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta1-->
  <!--Alerta2Prepago-->
  <div data-role="page" data-dialog="true" id="ALERT2">
    <div data-role="header">
      <h1>Prepago</h1>
    </div>

    <div data-role="main" class="ui-content">
    <div align="center">
      <p>Recarga exitosa!</p>
    </div>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaPagosK" data-transition="fade">OK</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta2-->

  <!--Alerta1Pospago-->
  <div data-role="page" data-dialog="true" id="ALERT3">

    <div data-role="header">
      <h1>Prepago</h1>
    </div>

    <div data-role="main" class="ui-content">
      <p>Ingrese información solicitada</p>
      <form method="post" action="demoform.asp">
      <div class="ui-field-contain">
        <label for="fullname">Numero De Telefono:</label>
        <input type="text" name="NumT" id="fullname" placeholder="506 00000000">       
      </div>
    </form>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#ALERT4" data-transition="flip">Continuar</a></li>
          <li><a href="#PaginaPagosK" data-transition="fade">Cancelar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta1-->
  <!--Alerta2Pospago-->
  <div data-role="page" data-dialog="true" id="ALERT4">
    <div data-role="header">
      <h1>Prepago</h1>
    </div>

    <div data-role="main" class="ui-content">
    <div >
      <p>#Factura:     XXXXXXX</p>
      <p>Titular:      XXXXXXX</p>
      <p>Vencimiento:  XXXXXXX</p>
      <p>Monto:        XXXXXXX</p>
    </div>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaPagosK" data-transition="fade">OK</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta2-->


</body>

</html>
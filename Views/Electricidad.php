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
  <!--Pagina ICE-->
  <div data-role="page" data-theme="b" id="PaginaElecICE">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaElecICE" data-transition="slidefade">ICE</a></li>
          <li><a href="#PaginaElecJASEC" data-transition="slidefade">JASEC</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/ICE.png">
        <div data-role="controlgroup" data-type="horizontal">
          <br>
          <br>
          <a href="#ALERTE" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Realizar Pago</a>
        </div><br>
      </div>


    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
    </div>
  </div>
  <!--Pagina ICE-->
  <!-- Pagina Inicio -->

  <!--Pagina JASEC-->
  <div data-role="page" data-theme="b" id="PaginaElecJASEC">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#PaginaElecICE" data-transition="slidefade">ICE</a></li>
          <li><a href="#PaginaElecJASEC" data-transition="slidefade">JASEC</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/JASEC.png">
        <div data-role="controlgroup" data-type="horizontal">
          <br>
          <br>
          <a href="#ALERTE" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Realizar Pago</a>
        </div><br>
      </div>
    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="Pagos.php">Atras</a>
    </div>
  </div>
  <!--Pagina JASEC-->

  <!--Alerta1-->
  <div data-role="page" data-dialog="true" id="ALERTE">

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
          <li><a href="#ALERTE2" data-transition="flip">Continuar</a></li>
          <li><a href="#PaginaElecICE" data-transition="fade">Cancelar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta1-->
  <!--Alerta2-->
  <div data-role="page" data-dialog="true" id="ALERTE2">
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
          <li><a href="#PaginaElecICE" data-transition="fade">OK</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta2-->

</body>

</html>
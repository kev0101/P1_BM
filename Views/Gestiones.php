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
  <!--Pagina CuentasBancarias-->
  <div data-role="page" data-theme="b" id="CuentasBancarias">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#CuentasBancarias" data-transition="slidefade">CUENTAS BANCARIAS</a></li>
          <li><a href="#Prestamo" data-transition="slidefade">PRESTAMOS</a></li>
          <li><a href="#Tarjeta" data-transition="slidefade">TARJETAS</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/CUENTA.png">
        <div data-role="controlgroup" data-type="horizontal">
          <br>
          <br>
          <a href="#FormCuenta" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Solicitar Nueva Cuenta Bancaria</a>
        </div><br>
      </div>


    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="../index.php">Atras</a>
    </div>
  </div>
  <!--Pagina CuentasBancarias-->
  <!-- Pagina Inicio -->

  <!--Pagina Prestamos-->
  <div data-role="page" data-theme="b" id="Prestamo">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#CuentasBancarias" data-transition="slidefade">CUENTAS BANCARIAS</a></li>
          <li><a href="#Prestamo" data-transition="slidefade">PRESTAMOS</a></li>
          <li><a href="#Tarjeta" data-transition="slidefade">TARJETAS</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/PRESTAMO.png">
        <div data-role="controlgroup" data-type="horizontal">
          <br>
          <br>
          <a href="#FormPrestamo" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Solicitar Prestamo</a>
        </div><br>
      </div>
    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="../index.php">Atras</a>
    </div>
  </div>
  <!--Pagina Prestamos-->

  <!--Pagina Tarjetas-->
  <div data-role="page" data-theme="b" id="Tarjeta">

    <div data-role="header">
      <div data-role="navbar">
        <ul>
          <li><a href="#CuentasBancarias" data-transition="slidefade">CUENTAS BANCARIAS</a></li>
          <li><a href="#Prestamo" data-transition="slidefade">PRESTAMOS</a></li>
          <li><a href="#Tarjeta" data-transition="slidefade">TARJETAS</a></li>
        </ul>
      </div>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <img id="image2" width="100%" heigth="100%" src="../Img/TARJETA.png">
        <div data-role="controlgroup" data-type="horizontal">
          <br>
          <br>
          <a href="#FormTarjeta" data-transition="flow" data-role="button" data-inline="true" data-theme="a">Solicitar Tarjeta</a>
        </div><br>
      </div>
    </div>

    <div data-role="footer">
      <a data-icon="arrow-l" data-iconpos="notext" href="../index.php">Atras</a>
    </div>
  </div>
  <!--Pagina Tarjetas-->

  <!-- ------------------------------------------------------------------------------------- -->

  <!--Alerta1Cuenta-->
  <div data-role="page" data-dialog="true" id="FormCuenta">

    <div data-role="header">
      <h1>Solicitud De Cuenta Bancaria</h1>
    </div>

    <div data-role="main" class="ui-content">
      <p>Ingrese información solicitada</p>
      <form method="post" action="demoform.asp">
        <div class="ui-field-contain">
          <label for="fullname">Identificacion:</label>
          <input type="text" name="NumT" id="fullname">
          <div data-role="fieldcontain">
            <label for="tipocuenta">Tipo de cuenta:</label>
            <select name="tipocuenta" id="tipocuenta">
              <option value="Corriente">Corriente</option>
              <option value="Ahorros">Ahorros</option>
              <option value="Nomina">Nómina</option>
            </select>
          </div>
          <div data-role="fieldcontain">
            <label for="tipomoneda">Tipo de moneda:</label>
            <select name="tipomoneda" id="tipomoneda">
              <option value="Colones">Colones</option>
              <option value="Dolares">Dolares</option>
            </select>
          </div>


        </div>
      </form>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#ALERT2" data-transition="flip">Continuar</a></li>
          <li><a href="#CuentasBancarias" data-transition="fade">Cancelar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta1-->


  <!--Alerta1Prestamos-->
  <div data-role="page" data-dialog="true" id="FormPrestamo">

    <div data-role="header">
      <h1>Solicitud De Prestamo</h1>
    </div>

    <div data-role="main" class="ui-content">
      <p>Ingrese información solicitada</p>
      <form method="post" action="demoform.asp">
        <div class="ui-field-contain">
          <label for="fullname">Identificacion:</label>
          <input type="text" name="NumT" id="fullname">
          <div data-role="fieldcontain">
            <label for="tipoprestamo">Tipo de prestamo:</label>
            <select name="tipoprestamo" id="tipoprestamo">
              <option value="Personal">Personal</option>
              <option value="Consumo">Consumo</option>
              <option value="Estudio">Estudios</option>
              <option value="Hipotecario">Hipotecarios</option>
              <option value="Empresa">Empresa</option>
            </select>
          </div>
          <label for="fullname">Importe De Prestamo:</label>
          <input type="text" name="NumT" id="fullname">
          <label for="fullname">Forma de devolución:</label>
          <input type="text" name="NumT" id="fullname">
          <label for="fullname">Intereses:</label>
          <input type="text" name="NumT" id="fullname">
          <label for="fullname">Lugar:</label>
          <input type="text" name="NumT" id="fullname">
          <label for="fullname">Fecha:</label>
          <input type="date" name="NumT" id="fullname">
          <label for="fullname">Firma:</label>
          <input type="text" name="NumT" id="fullname">
        </div>
      </form>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#ALERT2" data-transition="flip">Continuar</a></li>
          <li><a href="#Prestamo" data-transition="fade">Cancelar</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta1-->

<!--Alerta1Tarjeta-->
<div data-role="page" data-dialog="true" id="FormTarjeta">

<div data-role="header">
  <h1>Solicitud De Tarjeta</h1>
</div>

<div data-role="main" class="ui-content">
  <p>Ingrese información solicitada</p>
  <form method="post" action="demoform.asp">
    <div class="ui-field-contain">
      <label for="fullname">Identificacion:</label>
      <input type="text" name="NumT" id="fullname">
      <div data-role="fieldcontain">
        <label for="tipocuenta">Tipo de Tarjeta:</label>
        <select name="tipocuenta" id="tipocuenta">
          <option value="Aseguradas">Aseguradas</option>
          <option value="Cero Interes">Cero interes</option>
          <option value="TransferenciaDeSaldo">Tranferencia De Saldo</option>
          <option value="Recompensas">Recompensas</option>
        </select>
      </div>
      <label for="fullname">Número de cuenta:</label>
      <input type="text" name="NumT" id="fullname">
    </div>
  </form>
</div>

<div data-role="footer">
  <div data-role="navbar">
    <ul>
      <li><a href="#ALERT2" data-transition="flip">Continuar</a></li>
      <li><a href="#Tarjeta" data-transition="fade">Cancelar</a></li>
    </ul>
  </div>
</div>
</div>
<!--Alerta1-->

  <!--Alerta2-->
  <div data-role="page" data-dialog="true" id="ALERT2">
    <div data-role="header">
      <h1>Prepago</h1>
    </div>

    <div data-role="main" class="ui-content">
      <div align="center">
        <p>Solicitud exitosa!</p>
      </div>
    </div>

    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#CuentasBancarias" data-transition="fade">OK</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Alerta2-->

</body>

</html>
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
<div data-role="page" data-theme="b" id="PaginaTarjetasC">

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
  </br>
  </br>
  <table data-role="table" data-mode="columntoggle" class="ui-responsive" id="myTable">
      <thead>
        <tr>
          <th>NumTarjeta</th>
          <th data-priority="1">Saldo</th>
          <th data-priority="2">Pago Total</th>
          <th data-priority="3">FechaDeCorte</th>
          <th data-priority="4">FechaDeVencimiento</th>
          <th data-priority="5">Estado</th>
          <th data-priority="6">IBAN</th>
        </tr>
      </thead>
      <tbody>
      <?php
      foreach ($usuarios as $user) {
        echo "<tr>";
        echo "<td>". $user['NumTarjeta'] ."</td>";
        echo "<td>". $user['SaldoDisponible'] ."</td>";
        echo "<td>". $user['PagoTotal'] ."</td>";
        echo "<td>". $user['FechaDeCorte'] ."</td>";
        echo "<td>". $user['FechaDeVencimiento'] ."</td>";
        echo "<td>". $user['Estado'] ."</td>";
        echo "<td>". $user['IBAN'] ."</td>";
        echo "</tr>";
    }   
    ?>
      </tbody>
    </table>
  </div>
  <div data-role="footer">
   <h1>Footer</h1>
  </div>
</div> 
<!-- Pagina Inicio -->
</body>
</html>
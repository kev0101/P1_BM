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
    <!--Pagina INTERNET-->
    <div data-role="page" data-theme="b" id="PaginaPagosInternet">

        <div data-role="header">

        </div>

        <div data-role="main" class="ui-content">
            <div align="center">
                <img id="image2" width="100%" heigth="100%" src="../Img/INTERNET.png">
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
    <!--Pagina KOLBI-->
    <!-- Pagina Inicio -->

    <!--Alerta1-->
    <div data-role="page" data-dialog="true" id="ALERT">

        <div data-role="header">
            <h1>Prepago</h1>
        </div>

        <div data-role="main" class="ui-content">
            <p>Ingrese información solicitada</p>
            <form method="post" action="demoform.asp">
                <div class="ui-field-contain">
                    <label for="fullname">Numero De Suscriptor:</label>
                    <input type="text" name="NumT" id="fullname" placeholder="506 00000000">
                </div>
            </form>
        </div>

        <div data-role="footer">
            <div data-role="navbar">
                <ul>
                    <li><a href="#ALERT2" data-transition="flip">Continuar</a></li>
                    <li><a href="#PaginaPagosInternet" data-transition="fade">Cancelar</a></li>
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
                    <li><a href="#PaginaPagosInternet" data-transition="fade">OK</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Alerta2-->

</html>
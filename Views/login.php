<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/jquery.mobile-1.4.5.min.css">
<script src="./JS/jquery-2.1.4.min.js"></script>
<script src="./JS/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<!--Pagina Login-->
<div data-role="page" data-theme="b" id="PaginaLogin">

  <div data-role="header">
    <h1>Login</h1>
  </div>

  <div data-role="main" class="ui-content">
  <form action="" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <input type="text" name="username" placeholder="Identificacion"></p>
        <input type="password" name="password" placeholder="Contraseña"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>
  </div>

  <div data-role="footer">
   <h1>Footer</h1>
  </div>
</div> 
<!--Pagina Login-->
</body>
</html>
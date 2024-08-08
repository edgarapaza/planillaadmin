<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo constant('COMPANY'); ?></title>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation-float.css">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/foundation-prototype.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="<?php echo constant('URL'); ?>public/js/jquery.js"></script>
  <script src="<?php echo constant('URL'); ?>public/js/foundation.js"></script>
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/css/login.css">
</head>

<body>
  <div class="grid-container">
    <div class="grid-x margin-3 login-z shadow">
      <div class="cell large-6 callout info-z">
        <div class="padding-horizontal-2">
          <div class="callout text-center rounded shadow title">
            <h1>Katari-Software y Desarrollo</h1>
          </div>
          <p class="lead">
            Panel Administrativa, el usuario administrador puede registrar un nuevo personal y su usuario para que pueda ingresar al sistema de Planillas. 
          </p>
          <a href="" class="button">facebook</a>
          <a href="" class="button alert">Gmail</a>
        </div>
      </div>
      <div class="cell large-6 callout formulario-z">
        <div class="login">
          <div class="margin-1">
            <div class="callout text-center rounded shadow title">
              <h2>Login</h2>
            </div>
          </div>
          <form action="<?php echo constant('URL'); ?>login/user" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required/>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required/>
            <div class="text-center">
              <input type="submit" value="Ingresar" class="button success" /> 
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
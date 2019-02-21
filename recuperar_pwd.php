<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/starter-template.css">
	<link rel="stylesheet" href="css/floating-labels.css">
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  
<form class="form-signin" name="RecuperarPWD" action="comprobar_mail.php" method="GET">
<div class="text-center mb-4">
    <img class="mb-4" src="imagenes/recordar.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Recuperar la Contraseña</h1>
      <p>Introduce el correo electrónico con el que te registraste.</p>
</div>
<div class="form-label-group">
    <input type="mail" name="mail" class="form-control" placeholder="Email" required>
    <label for="inputMail">Correo electrónico: </label>
</div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
</form>  
</body>
</html>
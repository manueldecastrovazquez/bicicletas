<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"> 
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/starter-template.css">
	<link rel="stylesheet" href="css/floating-labels.css">
	<script src="js/jquery.min.js"></script>
	<title>Registro</title>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<form class="form-signin" name="RegistroUsuarios" action="alta_usuario.php" method="GET">
<div class="text-center mb-4">
    <img class="mb-4" src="imagenes/agenda.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Formularo de Registro</h1>
      <p>Introduce tu nombre de usuario, email y contraseña.</p>
  </div>
 <div class="form-label-group">
    <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
    <label for="inputUsuario">Nombre de usuario:</label>
</div>
<div class="form-label-group">
    <input type="mail" name="mail" class="form-control" placeholder="Email" required>
    <label for="inputMail">Correo electrónico: </label>
</div>
<div class="form-label-group">
    <input type="password" name="pwd" class="form-control" placeholder="Contraseña" required>
    <label for="inputMail">Contraseña:</label>
</div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
    <a href="index.html" class="btn btn-lg btn-danger btn-block">Volver sin registrar</a>
</form>
</body>
</html>
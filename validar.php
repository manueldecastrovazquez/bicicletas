<?php
include('funciones.php');
if(isset($_REQUEST['usuario'])&&isset($_REQUEST['pwd'])){
	$conexion=conectar_Base_Datos();
	if($conexion){
		$usuario=$_REQUEST['usuario'];
		$pwd=$_REQUEST['pwd'];
		if(existe_usuario($conexion,$usuario,$pwd)){
			// Entrar al sistema
			echo "Bienvenido";
		}else{
			// Indicar que el usuario o contraseña son incorrectos
			// y lo mandamos a inicio
            ventana_mensaje('Error: Usuario o contraseña incorrecto','index.html');
		}
		mysqli_close($conexion);
	}else{
        ?>
        <script>
			alert("Error de conexión a la base de datos");
		</script>
        <?php
	}
	
}else{
    header('Location:index.html');
}
?>
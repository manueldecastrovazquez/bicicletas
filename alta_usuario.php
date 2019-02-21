<?php
include('funciones.php');

if(isset($_REQUEST['usuario'])&&isset($_REQUEST['mail'])&&isset($_REQUEST['pwd'])){
	$conexion=conectar_Base_Datos();
	if($conexion){
		$usuario=$_REQUEST['usuario'];
		$mail=$_REQUEST['mail'];
		$pwd=$_REQUEST['pwd'];
		// alta el usuario.
		if(dar_alta_usuario($conexion,$usuario,$mail,$pwd)){
			?>
		<script>
			alert("Registro insertado correctamente");
		</script>
		<?php
		}else{?>
		<script>
			alert("No se pudo insertar el registro, el usuario o mail está usado");
		</script>	
		<?php 
		}
		mysqli_close($conexion);
		echo "<a href='index.html'>Volver</a>";
	}else{
		echo "Error de conexión a la Base de datos";
		header('Location:index.html');
	}
	
}else{
	header('Location:index.html');
}
?>
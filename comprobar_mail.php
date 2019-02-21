<?php
include('funciones.php');
if(isset($_REQUEST['mail'])){
	$conexion=conectar_Base_Datos();
	if($conexion){
		$mail=$_REQUEST['mail'];
        $pwd='';
		if(existe_mail($conexion,$mail,$pwd)){
			// Hay que mandar el mail
            $msg="Su contraseña es:".$pwd;
            mail($mail,'Recuperación de contraseña',$msg);
			echo "Enviado la contraseña a su correo, compruebe que lo ha recibido";
		}else{
			// Indicar que No hay ningún usuario registrado con ese mail.
			echo "Revise el mail introducido, ya que no se encuentra en nuestro registro.<br/>";
			echo "<a href=\"index.html\"> Volver al inicio </a>";
		}
		mysqli_close($conexion);
	}else{
		echo "Error de conexión a la Base de datos";
	}
	
}else{
	header('Location:index.html');
}
?>
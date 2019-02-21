<?php
function conectar_Base_Datos(){
$userDB="agenda_user";
$DB="agenda";
$pwdDB="asir2";
$serverDB="localhost";
$con=mysqli_connect($serverDB,$userDB,$pwdDB,$DB);
return $con;
}

function existe_usuario($c,$u,&$p){
	$sql="SELECT NombreUsuario,Password FROM usuarios WHERE NombreUsuario='$u' AND Password='$p'";
	$resultado=mysqli_query($c,$sql);
	if(mysqli_num_rows($resultado)==1){
		return true;
	}else{
		return false;
	}
}

function existe_mail($c,$m,&$p){
	$sql="SELECT Mail,Password FROM usuarios WHERE Mail='$m'";
	$resultado=mysqli_query($c,$sql);
	if(mysqli_num_rows($resultado)==1){
        $fila=mysqli_fetch_array($resultado);
        $p=$fila['Password'];
		return true;
	}else{
		return false;
	}
}

function dar_alta_usuario($c,$u,$m,$p){
	$sql="INSERT INTO usuarios (NombreUsuario,Mail,Password) VALUES ('$u','$m','$p')";
	mysqli_query($c,$sql);
	if(mysqli_errno($c)==0){
		return true;
	}else{
		//echo "No se ha insertado. Error: ".mysqli_error($c);
		return false;
	}
}

function ventana_mensaje($mensaje,$pagina){
		echo "<script>alert('".$mensaje."');location.href='".$pagina."';</script>";
	
}

function ir_a_url($pagina){
	 echo "<script>location.href='".$pagina."';</script>";
}



?>
<?php
//CAMBIAR LA DIRECCION DE SERVIDOR; USUARIO DE LA BASE DE DATOS,
//CONTRASEÑA DE USUARIO, y EL NOMBRE DE LA BASE DE DATOS.
	$mysqli=new mysqli("localhost:3306","root","root","login");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

?>

<?php

	$realname=$_POST['realname'];
	$usuario=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("conexion.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkusuario=mysqli_query($mysqli,"SELECT * FROM login WHERE nom_usu='$usuario'");
	$checkusuario=mysqli_num_rows($checkusuario);
		if($pass==$rpass){
			if($checkusuario>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el usuario designado para un usuario, verifique sus datos");</script> ';
			}else{

				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$pass','$usuario','','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';

			}

		}else{
			echo 'Las contraseñas son incorrectas';
		}


?>

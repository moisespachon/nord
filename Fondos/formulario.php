
<?php
/*function db_nord (){*/
$mysqli = new mysqli("localhost", "nord_user", "nord2018**", "nord");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
  printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

 $username = $_POST['username'];
 $correo   = $_POST['correo'];
 $pass     = $_POST['pass'];
 $confipass= $_POST['confipass'];
 $requerido= strlen($username) * strlen($correo) * strlen($pass) * strlen($confipass);
 $asunto   = "Registro exitoso";
 $msg      = "Gracias por subscribirse";


	if ($requerido > 0) {
		if ($pass===$confipass){
			$pass = md5($pass);
			$mysqli->query("INSERT INTO resgistro VALUES ('','$username','$correo','$pass')");
			$mysqli->close();
			mail($correo, $asunto, $msg);
			//echo $mysqli;
			echo "Registro Exitoso";
		}else {
			echo "Las contraseñas deben coincidir";
		}
	}else {
		echo "Todos los campos son requeridos";
	}



/*}*/
?>

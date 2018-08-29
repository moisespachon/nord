<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
<div class="inicio-r">
	<div class="form-cont">
		<div class="form-cont-form">
		<h1>User Register</h1>
			<form method="post" class="form-cont-form" name="registro" >
				
				<input type="text" name="username" placeholder="Username" required>
				
				<input type="email" name="correo" placeholder="Email" required>
				
				<input type="Password" name="pass" placeholder="Password" required>
				
				<input type="password" name="confipass" placeholder="Confirm Password" required>
				<input type="submit" name="createaccount" value="Create Account">
				

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

			</form>
			
			<div id="alert">
				<p></p>
			</div>

		</div>
	</div>
</div>
</div>





</body>
</html>
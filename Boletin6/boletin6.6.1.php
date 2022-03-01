<?php
$nombre=$_POST['nombre']; //variable del nombre
$apellidos=$_POST['apellidos']; //varialbe de apellidos
	setcookie('nombre', $nombre); //crea cookie con valor nombre
	setcookie('apellidos', $apellidos); //crea cookie con valor apellidos
if(isset($_COOKIE['nombre'], $_COOKIE['apellidos']))
	//si existe nombre y apellido pasa lo siguiente
	{
		$mensaje = "Bienvenido/a: $_COOKIE[nombre] $_COOKIE[apellidos].";
		//se introducen las variables
	}
	else //si no existen variables de nombre y apellidos
	{
		$mensaje = "Bienvenido/a Ana María gracias por visitarnos";
	}
?>
<html>
	<head>
		<title>Boletin 6.5</title>
	</head>
	<body>
		<?php
			echo $mensaje;
		?>
	</body>
</html>

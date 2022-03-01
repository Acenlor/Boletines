<?php
	if(isset($_COOKIE['contador'])) //cuando renonozca contador pasara lo siguiente
	{
		setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
		//cambia valores de cookie aumentando en uno el anterior
		$mensaje = 'Numero de visitas' . $_COOKIE['contador'];
		//muestra lo establecido en la cookie
	}
	else //si no hay contador ocurre esto otro
	{
		setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
//se crea la cookie contador y se le da valor 1 a la expiración	
		$mensaje = 'Bienvenido a la Web';
//se introduce como valor en mensaje una cadena de texto	
	}
?>
<html>
	<head>
		<title>Boletin 6, Apartado 4</title>
	</head>
	<body>
		<p>
			<?php
				echo $mensaje;// se muestra por pantalla lo que contiene la variable
			?>
		</p>
	</body>
</html>

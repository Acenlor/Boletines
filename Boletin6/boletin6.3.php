<?php
date_default_timezone_set('Europe/Madrid'); //establece zona horaria
	if(isset($_COOKIE['fecha'])) //cuando renonozca la esta cookie pasara lo siguiente
	{
		setcookie('fecha', date("d/m/y H:i:s")); //cambia valores
		$mensaje = 'La ultima vez fue: ' . $_COOKIE['fecha'];
	}
	else //si no hay fecha ocurre esto otro
	{
		setcookie('fecha', date("d/m/y H:i:s"));
//se crea la cookie fecha y se da un valor fecha		
		$mensaje = 'Esta es tu primera vez';
		//se introduce como valor  mensaje, en una caedena de texto
	}
?>
<html>
	<head>
		<title>Boletín 6.3</title>
	</head>
	<body>
		<p>
			<?php
				echo $mensaje;//se muestra el contenido de la variable
			?>
		</p>
	</body>
</html>

<html>
	<meta charset="UTF-8">
<?php

$equipo = $_POST["equipo"];
// se introduce el valor de la matriz en la variable
$color = "white";
// creamos la variable con el valor "white"
switch($equipo)//crearemos un "switch" para que realice la oeración sengún el valor
{
	case "Barsa"://si el valor es este
		$color = "blue";//el resultado sera le siguiente
		break;
	case "Madrid"://si el valor es este
		$color = "red";//el resultado sera le siguiente
		break;
}
?>

	<body style="background-color: <?php echo $color; ?>;">
<!--se cambiara el color de fondo usando el valor modifivado de la variable-->
	</body>	
</html>


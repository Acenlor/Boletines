<html>
	<meta charset="UTF-8">
<?php

$primernumero = $_POST["primernumero"];//se introduce el valor de la matriz en la variable
$segundonumero = $_POST["segundonumero"];//se introduce el valor de la matriz en la variable
$operacion = $_POST["operacion"];
//se introduce el valor de la matriz en la variable
$resultado = 0;// se crea la variable con valor 0
switch($operacion)//se crea eñ "switch" donde se genera la operación con el valor dado
{
	case "multiplicacion"://si el valor de operar es multiplicar sera lo siguiente
		$resultado = $primernumero * $segundonumero;//se almacena el resultado con el valor resultante
		break;//sale del "switch"
	case "division"://si el valor de operar es dividir sera lo siguiente
		$resultado = $primernumero / $segundonumero;//se almacena el resultado con el valor resultante
		break;//sale del "switch"
	case "suma"://si el valor de operar es sumar sera lo siguiente
		$resultado = $primernumero + $segundonumero;//se almacena el resultado con el valor resultante
		break;//sale del "switch"
	case "resta"://si el valor de operar es restar sera lo siguiente
		$resultado = $primernumero - $segundonumero;//se almacena el resultado con el valor resultante	
		break;//sale del "switch"
}
echo "<h2>El resultado de la $operacion de $primernumero y $segundonumero es $resultado</h2>";
//muestra el texto por pantalla
?>

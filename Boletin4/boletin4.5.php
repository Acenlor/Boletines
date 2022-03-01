<?php

function imprime_tabla($numero) //creamos funcion 
{
	if($numero == "todas") //si es identico sigue
	{
		for($i = 0; $i < 10; $i++)
		{
			imprime_tabla($i + 1);
		}
	}
	else if($numero >=1 && $numero<= 10) //si no es identico hace esto
	{
		echo "tabla del $numero.<br>";
		for($i=0; $i<= 10; $i++)//bucle que seguirá mientras $i sea mas pequeño o igual a 10
		{
			echo $numero . "x" . $i . " = " . $numero * $i . "<br>";
		}	
		echo "<br>";//salto de linea
	}
}
echo "imprimir tabla del 7: <br><br>";
imprime_tabla(7);
echo "imprimir todas las tablas; <br><br>";
imprime_tabla("todas");

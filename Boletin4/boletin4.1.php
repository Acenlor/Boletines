<?php

function notas_aleatorias($size)//crearemos la función con el parametro $size
{
	$notas = array(); //creamos array
	
	for($i =0; $i <$size; $i++)
	{
		$notas[$i] = rand(0,10); //los numeros se van almacenando en el array
	}
	
	return $notas;
}

$notas = notas_aleatorias(5);

for($i = 0; $i < count($notas); $i++)
{
	echo $notas[$i]; //muestra notas
	echo "<br/>"; //salto de linea
}
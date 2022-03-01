<?php

function notas_aleatorias($size)//creamos la función 
{
	$notas = array();
		for($i =0; $i <$size; $i++)
	{
		$notas[$i] = rand(0,10);
	}
	return $notas;
}

function agregar_nota($array, $nota)
{
	$array[] = $nota;
	return $array;
}
$notas = notas_aleatorias(5);
$mas_notas = agregar_nota($notas, 6);
for($i = 0; $i < count($mas_notas); $i++)//el bucle que seguirá mientras $1 sea mas pequeño que $contador1
{                                          
	echo $mas_notas[$i];
	echo "<br>";//salto de linea
}	

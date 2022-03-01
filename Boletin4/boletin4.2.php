<?php

function notas_aleatorias($size) //crearemos la función
{cion 
	$notas = array(); //introducimos como valor en $notas el número de elementos de array
	
	for($i = 0; $i < $size; $i++)
	{
		$notas[$i] = rand(0,10);
	}
	
	return $notas;
}

function estadisticas($array) //crea funcion 

{
	$max = max($array);//mostramos por la pantalla la cariable $max
	$min = min($array);//$min
	$media = array_sum($array) / count($array);//med
	
	echo "Nota maxima: " . $max . "<br>";
	echo "Nota minima: " . $min . "<br>";
	echo "Nota media: " . $media . "<br>";
}

$notas = notas_aleatorias(5);

estadisticas($notas);
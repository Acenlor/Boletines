<?php

$notas = array();

$notas[] = $_POST["ASGBD"];//se introduce el valor de la matriz aociativa en el array
$notas[] = $_POST["ASO"];//""
$notas[] = $_POST["EMPRESA"];//""
$notas[] = $_POST["IAW"];//""
$notas[] = $_POST["SAD"];//""
$notas[] = $_POST["SRI"];//""

$media = array_sum($notas) / count($notas);
echo "<p>Tu nota media es $media</p></br>";//la media sera el resultante de sumar los elementos y dividirlos
$todas_aprobadas = true;
for($i = 0; $i < count($notas); $i++)
{
	if($notas[$i] <5)//si el elemento del array es menor a 5 
		$todas_aprobadas = false;// las asignaturas no seran aprobadas
}
if($todas_aprobadas)
	echo "<h2>Has aprobado todas las asignaturas</h2>";//mostrará el texto por pantalla
else
	echo "<h2>No has aprobado todas las asignatiras</h2>";//mostrará el texto por pantalla


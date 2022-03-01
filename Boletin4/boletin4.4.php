<?php
function notas_aprobadas($array) {//creamos la función
	$u=0;//declaramos la variable con su función
	$contador = count($array);//introducimos como valor en contador el numero de elementos del array
		for($i=0; $i<$contador; $i++){//crearemos un bucle
			if ( $array[$i] >= 5 ){//si el elemento es igual o mayor a 5 se iran introduciendo los elementos
				$array2[$u]=$array[$i];
				$u++;
			}
		}
	return $array2;//la función devuelve el array
	}
$array = array(8, 7, 5, 5, 4, 5, 8, 9, 3, 5);// crearemos el array con 10 elementos
echo "estas son las notas aprobadas:<br>";//muestra el texto por la pantalla
$aprobadas = notas_aprobadas($array);
$contador2 = count($aprobadas);
for($i=0; $i<$contador2; $i++)//crearemos el bucle
{
	echo $aprobadas[$i];// se mostraran todos los elementos del array
	echo "<br>";//salto de linea
}
?>


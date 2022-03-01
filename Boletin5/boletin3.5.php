<html>
	<meta charset="UTF-8">
	<h2>Pon dos numeros y elige operacion</h2>
	<form method="POST" action="Boletin3.3.5.php">
<!--llamamos al formulario con el primer atributo para que hable con el fichero
y con el segundo es el que usaremos para neviar dicha información-->	
		<label for="primernumero">Primer Numero</label><input type="number" name="primernumero"/></br>
		<label for="segundonumero">Segundo Numero</label><input type="number" name="segundonumero"/></br>
<!--el usuario introduce los valores con los que el fichero operará-->		
		<label for="operacion">La Operación que sucede<label/>
			<select name="operacion">
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
<!--el usuario escoge una de las opciones-->	
			</select><br/>
		<input type="submit"/>
<!--cuando eso ocurra pulsará el boton y enviara los datos-->		
	</form>
</html>

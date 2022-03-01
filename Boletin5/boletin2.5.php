<html>
	<h3>Introduzca las notas de las asignaturas</h3>
	<form method="POST" action="Boletin2.2.5.php">
<!--llamamos al formulario con el attributo que se comunica con el fichero php
y con el segundo atributo enviamos la información-->	
		<label for="ASGBD">ASGBD</label><input type="number" name="ASGBD"/></br>
		<label for="ASO">ASO</label><input type="number" name="ASO"/></br>
		<label for="EMPRESA">EMPRESA</label><input type="number" name="EMPRESA"/></br>
		<label for="IAW">IAW</label><input type="number" name="IAW"/></br>
		<label for="SAD">SAD</label><input type="number" name="SAD"/></br>
		<label for="SRI">SRI</label><input type="number" name="SRI"/></br>
<!--el usuario introducira los valores-->		
		<input type="submit"/>
<!--y le dara a enviar para que esos datos introducidos sean enviados 
    e introducidos en el formulario-->		
	</form>
</html>



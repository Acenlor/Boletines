<html>
	<meta charset="UTF-8">
	<h2>Ponga sus apellidos</h2>
	<form method="POST" action="boletin4.4.4.5.php">
<!--llamamos al formulario con el primer atributo y con el segundo pasamos
la información-->	
		<input type="hidden" name="nombre" value="<?php echo $_POST["nombre"]; ?>"/>
		<label for="apellidos">Apellidos: </label><input type="text" name="apellidos"/>
<!--el usuario introduce los datos que usará el fichero-->		
		<input type="submit"/>
<!--y pulsará para enviar los datos-->		
	</form>
</html>

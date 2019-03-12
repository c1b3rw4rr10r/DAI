<!DOCTYPE html>
<html>
	<head>
		<title>Ingreso </title>
	</head>
		<body>
			<h1>Ingreso personas</h1>
			<form name="frmPersonas" method="post" action="ingreso.php">
	<table>
<tr>
	<td>Nombre</td>
	<td><input type="text" name="txtNombre" id="txtNombre" maxlength="100"/></td>
</tr>

<tr>
	<td>Apellido</td>
	<td><input type="text" name="txtApellido" id="txtApellido" maxlength="100"/></td>
</tr>

<tr>
	<td>Edad</td>
	<td><input type="text" name="txtEdad" id="txtEdad" maxlength="3"/></td>
</tr>

<tr>
	<td>Estado civil</td>
	<td><input type="radio" name="ec" value="C" checked> Casado
	<input type="radio" name="ec" value="V"> Viudo
	<input type="radio" name="ec" value="S"> Soltero
	</td>
</tr><tr>

<tr>
	<td>Sexo</td>
	<td><input type="radio" name="sx" value="F" checked> Femenino 
	<input type="radio" name="sx" value="M"> Masculino
	</td>
</tr><tr>

	<td>Metodo de locomocion</td>
	<td><input type="checkbox" name="auto" value="I"/> auto
		<input type="checkbox" name="moto" value="D"/> moto
		<input type="checkbox" name="micro" value="U"/> micro
		<input type="checkbox" name="metro" value="U"/> metro
		<input type="checkbox" name="taxi" value="U"/> taxi
	</td>


	<td><input type="submit" value="Ingresar"></td>
	<td></td>
</tr>
	</table>
     	</form>
	</body>
</html>
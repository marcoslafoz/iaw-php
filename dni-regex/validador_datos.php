<?php

$archivo = 'usuarios.json';
$name = $_POST['name'] ?? '';
$surname = $_POST['surname'] ?? '';
$username = $_POST['username'] ?? '';
$document = $_POST['document'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';

const PATRON_NAME_SURNAME = "/^[a-zA-Z -]+$/";
const PATRON_USERNAME = "/^[a-zA-Z][a-zA-Z0-9]{5,}$/";
const PATRON_DNI = "/^[0-9]{8}[a-zA-Z]$/";
const PATRON_NIE = "/^[XYZxyz][0-9]{7}[a-zA-Z]$/";
const PATRON_PHONE_NUMBER = "/^[0-9]{9}$/";
const LETRAS_DNI = 'TRWAGMYFPDXBNJZSQVHLCKE';


function validar_dni($dni): bool
{
	// Comprobamos si el dni cumple con la regex
	if (!preg_match(PATRON_DNI, $dni)) return false;

	// Extraemos el número
	$numero = intval(substr($dni, 0, 8));

	// Extraemos la letra del dni y la pasamos a uppercase
	$letra_dni = strtoupper(substr($dni, 8, 1));

	// Calculamos la letra de control
	$letra_calculada = LETRAS_DNI[$numero % 23];

	return $letra_dni == $letra_calculada;
}

function validar_nie($nie)
{
	// Comprobamos si el nie cumple con la regex
	if (!preg_match(PATRON_NIE, $nie)) return false;

	// Obtenemos la letra inicial
	$letra_inicial = strtoupper($nie[0]);

	// Pasamos el numero a string
	$numero_str = substr($nie, 1, 7);

	// Obtenemos la letra final del nie y la pasamos a uppercase
	$letra_nie = strtoupper(substr($nie, 8, 1));

	// Depende la letra inicial le asignamos un numero y lo ponemos al principio del string del numero
	switch ($letra_inicial) {
		case 'X':
			$numero_str = '0' . $numero_str;
			break;
		case 'Y':
			$numero_str = '1' . $numero_str;
			break;
		case 'Z':
			$numero_str = '2' . $numero_str;
			break;
		default:
			return false;
	}

	// Pasamos el numero a int
	$numero = intval($numero_str);

	// Calculamos la letra de control
	$letra_calculada = LETRAS_DNI[$numero % 23];

	// Si la letra calculada coincide con la letra del nie devolvemos true, sino devolvemos false
	return $letra_nie == $letra_calculada;
}

function validar_datos($name, $surname, $username, $document, $phone_number)
{
	$errores = [];

	// Comprobamos el nombre
	if (!preg_match(PATRON_NAME_SURNAME, $name)) {
		$errores[] = "El nombre no es válido";
	}

	// Comprobamos el apellido
	if (!preg_match(PATRON_NAME_SURNAME, $surname)) {
		$errores[] = "El apellido no es válido";
	}

	// Comprobamos el nombre de usuario
	if (!preg_match(PATRON_USERNAME, $username)) {
		$errores[] = "El nombre de usuario no es válido";
	}

	// Validar dni y nie
	if (!validar_dni($document) && !validar_nie($document)) {
		$errores[] = "El documento de identidad no es válido";
	}

	// Validamos el numero de telefono
	if (!preg_match(PATRON_PHONE_NUMBER, $phone_number)) {
		$errores[] = "El número de teléfono no es válido";
	}

	return $errores;
}

// El vector con errores que nos devuelve lo asignamos a una valiable que mostraremos por pantalla
$errores = validar_datos($name, $surname, $username, $document, $phone_number);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<title>Error de Acceso</title>
</head>

<body>
	<div class="contenedor">
		<p>
			<?php
			// Si el tamaño del vector de los errores es mayor a 0 mostramos los errores
			if (count($errores) > 0) {
				echo "<h2>Se han encontrado los siguientes errores</h2><br/>";

				foreach ($errores as $key => $error) {
					echo '<span class="error">' . $error . ' </span><br/>';
				};
				//Si el tamaño del vector de los errores es 0 mostramos que todo es correcto
			} else {
				echo "Todos los datos son correctos";
			};
			?>
		</p>
		<a href="formulario.php" class="btn-volver">Intentarlo de nuevo</a>
	</div>
</body>

</html>
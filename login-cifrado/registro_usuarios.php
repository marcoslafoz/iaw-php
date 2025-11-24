<?php

$archivo = 'usuarios.json';
$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';
$mensaje = "";
$redireccion = false;

// Comprobamos requisitos
if (strlen($user) <= 3) {
	$mensaje = "El nombre de usuario debe tener más de 3 caracteres.";
} elseif (strlen($pass) <= 5) {
	$mensaje = "La contraseña debe tener más de 5 caracteres.";
	// Si cumple con los requisitos comprobamos que el usuario exis
} else {

	$contenido = file_exists($archivo) ? file_get_contents($archivo) : '{}';
	$usuarios = json_decode($contenido, true);
	if (!is_array($usuarios)) {
		$usuarios = [];
	}

	if (isset($usuarios[$user])) {
		// Usuario existe
		if (password_verify($pass, $usuarios[$user])) {
			$redireccion = true;
		} else {
			// Si la contraseña es incorrecta
			$mensaje = "Contraseña incorrecta para el usuario existente.";
		}
	} else {
		// Usuario nuevo
		$usuarios[$user] = password_hash($pass, PASSWORD_DEFAULT);
		if (file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT))) {
			$redireccion = true;
		} else {
			$mensaje = "Error al registrar el nuevo usuario.";
		}
	}
}

// Si ha sido correcto volvemos a la página principal, sino mostramos el error
if ($redireccion) {
	header("Location: formulario.php?usuario=" . urlencode($user));
	exit();
}
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
		<h2>Error</h2>
		<p style="font-size: 18px; text-align: center;"><?php echo $mensaje; ?></p>
		<br>
		<a href="formulario.php" class="btn-volver">Intentarlo de nuevo</a>
	</div>
</body>

</html>
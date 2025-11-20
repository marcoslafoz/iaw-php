<?php
$archivo = 'users.json';
$user = $_POST['username'];
$pass = $_POST['password'];

$contenido = file_exists($archivo) ? file_get_contents($archivo) : '{}';
$usuarios = json_decode($contenido, true);

if (isset($usuarios[$user])) {
  // Comprobamos si existe el usuario
  if ($usuarios[$user] == $pass) {
    $mensaje = "Bienvenido de nuevo, $user.";
  } else {
    $mensaje = "Contraseña incorrecta.";
  }
} else {
  // Crea el usuario y lo mete al json
  $usuarios[$user] = $pass;
  file_put_contents($archivo, json_encode($usuarios));
  $mensaje = "Usuario $user creado correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="contenedor">
    <h2>Resultado</h2>
    <p style="font-size: 18px; text-align: center;"><?php echo $mensaje; ?></p>
    <br>
    <a href="index.php" class="btn-volver">Volver</a>
  </div>
</body>

</html>
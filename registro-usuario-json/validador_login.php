<?

$archivo = 'usuarios.json';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$usuarios = [];
if (file_exists($archivo)) {
  $json_content = file_get_contents($archivo);
  $usuarios = json_decode($json_content, true) ?? [];
}

$usuario_encontrado = null;
foreach ($usuarios as $user) {
  if ($user['username'] === $username) {
    $usuario_encontrado = $user;
    break;
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <title>Resultado Login</title>
</head>

<body>
  <div class="contenedor">
    <?php
    if ($usuario_encontrado && password_verify($password, $usuario_encontrado['password'])) {
      echo '<h1>Bienvenido, ' . htmlspecialchars($usuario_encontrado['name']) . ' ' . htmlspecialchars($usuario_encontrado['surname']) . '</h1>';
      echo '<p>Has iniciado sesión correctamente.</p>';
    } else {
      echo '<h1>Error de acceso</h1>';
      echo '<p>Usuario o contraseña incorrectos.</p>';
      echo '<a href="login.php" class="btn-volver">Intentarlo de nuevo</a>';
    }
    ?>
  </div>
</body>

</html>
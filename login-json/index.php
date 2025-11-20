<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcos Lafoz - Login</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="contenedor">
    <h2>Inicio de sesión</h2>
    <h3>Marcos Lafoz</h3>

    <form action="backend.php" method="post" class="formulario">
      <input type="text" name="username" placeholder="Usuario" required />
      <input type="password" name="password" placeholder="Contraseña" required />
      <input type="submit" value="Iniciar sesión" />
    </form>
  </div>

</body>

</html>
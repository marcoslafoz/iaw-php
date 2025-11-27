<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="contenedor">
    <h1>Iniciar Sesión</h1>

    <form action="validador_login.php" method="post" class="formulario">
      <input type="text" name="username" placeholder="Nombre de usuario" required />
      <input type="password" name="password" placeholder="Contraseña" required />
      <input type="submit" value="Entrar" />
    </form>

    <br>
    <a href="register.php" class="btn-volver">Registrarse</a>

  </div>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Proyecto Básico</title>
</head>

<body>
  <form action="login.php" method="POST">
    <h2>Login / Registro Automático</h2>
    <p>Si el usuario no existe, se creará.</p>

    <label>Usuario (>3 car):</label><br>
    <input type="text" name="username" required><br><br>

    <label>Contraseña (>5 car):</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Enviar</button>
  </form>
</body>

</html>
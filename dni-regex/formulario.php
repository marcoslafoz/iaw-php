<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regex</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="contenedor">
    <h1>Bienvenido</h1>

    <form action="validador_datos.php" method="post" class="formulario">
      <input type="text" name="name" placeholder="Nombre" required />
      <input type="text" name="surname" placeholder="Apellidos" required />
      <input type="text" name="username" placeholder="Nombre de usuario" required />
      <input type="text" name="document" placeholder="DNI / NIE" required />
      <input type="text" name="phone_number" placeholder="Número de teléfono" required />
      <input type="submit" value="Entrar" />
    </form>

  </div>

</body>

</html>
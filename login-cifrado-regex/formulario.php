<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión encriptado</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="contenedor">
    <h1>Bienvenido</h1>
    <h2>Inicio de sesión encriptado: Marcos Lafoz</h2>

    <?php if (isset($_GET['usuario'])): ?>
      <h3><?php echo htmlspecialchars($_GET['usuario']); ?></h3>
      <p style="text-align: center; margin-bottom: 20px;">Inicio de sesión correcto</p>
      <a href="formulario.php" class="btn-volver">Salir</a>
    <?php else: ?>
      <form action="registro_usuarios.php" method="post" class="formulario">
        <input type="text" name="username" placeholder="Usuario" required />
        <input type="password" name="password" placeholder="Contraseña" required />
        <input type="submit" value="Entrar" />
      </form>
    <?php endif; ?>

  </div>

</body>

</html>
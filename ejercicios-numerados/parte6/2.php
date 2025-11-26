<?php
session_start();

if (!isset($_SESSION['oculto'])) {
  $_SESSION['oculto'] = rand(1, 100);
  $_SESSION['intentos'] = 0;
}

$mensaje = "Introduce un número del 1 al 100";

if (isset($_REQUEST['numero'])) {
  $numero = $_REQUEST['numero'];
  $_SESSION['intentos']++;

  if ($numero < $_SESSION['oculto']) {
    $mensaje = "El número es mayor.";
  } elseif ($numero > $_SESSION['oculto']) {
    $mensaje = "El número es menor.";
  } else {
    $mensaje = "El número era " . $_SESSION['oculto'] . ". <br>Intentos totales: " . $_SESSION['intentos'] . ". <br><b>Juego reiniciado</b>";
    $_SESSION['oculto'] = rand(1, 100);
    $_SESSION['intentos'] = 0;
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<body>
  <h1>Adivina el Número</h1>

  <h3><?php echo $mensaje; ?></h3>

  <form method="post">
    <input type="number" name="numero" required autofocus>
    <input type="submit" value="Adivinar">
  </form>

  <p>Intentos actuales: <?php echo $_SESSION['intentos']; ?></p>
</body>

</html>
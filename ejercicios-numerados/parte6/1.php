<?php
session_start();

if (isset($_REQUEST['borrar'])) {
  session_unset();
  session_destroy();
  $_SESSION = array();
}

if (!isset($_SESSION['visitas'])) {
  $_SESSION['visitas'] = 1;
} else {
  $_SESSION['visitas']++;
}
?>

<!DOCTYPE html>
<html lang="es">

<body>
  <h1>Has recargado esta página: <?php echo $_SESSION['visitas']; ?> veces</h1>

  <form method="post">
    <input type="submit" value="Recargar página">
    <input type="submit" name="borrar" value="Reiniciar sesión">
  </form>
</body>

</html>
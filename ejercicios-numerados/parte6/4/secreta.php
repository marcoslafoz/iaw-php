<?php
session_start();

if (isset($_POST['cerrar'])) {
  session_destroy();
  header("Location: index.php");
  exit();
}

if (!isset($_SESSION['usuario'])) {
  die("Prohibido");
}
?>

<!DOCTYPE html>
<html>

<body>
  <h1>Bienvenido a la página secreta</h1>
  <form method="post">
    <input type="submit" name="cerrar" value="Cerrar sesión">
  </form>
</body>

</html>
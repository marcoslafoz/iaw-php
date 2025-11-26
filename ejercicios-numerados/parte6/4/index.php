<?php
session_start();

if (isset($_POST['usuario']) && $_POST['clave'] == '1234') {
  $_SESSION['usuario'] = $_POST['usuario'];
  header("Location: secreta.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<body>
  <form method="post">
    Usuario: <input type="text" name="usuario" required><br>
    Contraseña: <input type="password" name="clave" required><br>
    <input type="submit" value="Entrar">
  </form>
</body>

</html>
<?php
session_start();

if (isset($_POST['vaciar'])) {
  $_SESSION['carrito'] = [];
}

if (isset($_POST['eliminar'])) {
  unset($_SESSION['carrito'][$_POST['eliminar']]);
}
?>

<!DOCTYPE html>
<html>

<body>
  <h1>Tu Carrito</h1>
  <ul>
    <?php foreach ($_SESSION['carrito'] as $nombre => $cantidad): ?>
      <li>
        <?php echo "$nombre (Cant: $cantidad)"; ?>
        <form method="post" style="display:inline">
          <input type="hidden" name="eliminar" value="<?php echo $nombre; ?>">
          <input type="submit" value="Eliminar">
        </form>
      </li>
    <?php endforeach; ?>
  </ul>

  <form method="post">
    <input type="submit" name="vaciar" value="Vaciar carrito">
  </form>
  <br>
  <a href="tienda.php">Volver a la tienda</a>
</body>

</html>
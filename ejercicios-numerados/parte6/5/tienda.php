<?php
session_start();

if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = [];
}

$productos = ["Articulo1", "Articulo2", "Articulo3", "Articulo4"];

if (isset($_POST['producto'])) {
  $prod = $_POST['producto'];
  if (isset($_SESSION['carrito'][$prod])) {
    $_SESSION['carrito'][$prod]++;
  } else {
    $_SESSION['carrito'][$prod] = 1;
  }
}
?>

<!DOCTYPE html>
<html>

<body>
  <h1>Productos</h1>
  <form method="post">
    <select name="producto">
      <?php foreach ($productos as $p): ?>
        <option value="<?php echo $p; ?>"><?php echo $p; ?></option>
      <?php endforeach; ?>
    </select>
    <input type="submit" value="Añadir al carrito">
  </form>
  <br>
  <a href="carrito.php">Ver Carrito</a>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<body>

  <form method="post">
    <label>Introduce un número:</label>
    <input type="number" name="numero" min="0" max="10" required>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if (isset($_REQUEST['numero'])) {
    $numero = intval($_REQUEST['numero']);

    if ($numero >= 0 && $numero <= 10) {

      for ($i = 1; $i <= 10; $i++) {
        echo $numero . ' X ' . $i . ' = ' . $numero * $i . '<br>';
      }
    } else {
      echo 'El numero tiene que ser entre 0 y 10';
    }
  }
  ?>

</body>

</html>
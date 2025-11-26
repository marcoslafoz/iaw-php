<!DOCTYPE html>
<html lang="es">

<body>

  <form method="post">
    <label>Introduce un año:</label>
    <input type="number" name="anio" required>
    <input type="submit" value="Comprobar">
  </form>

  <?php
  if (isset($_REQUEST['anio'])) {
    $anio = $_REQUEST['anio'];
    if (!is_numeric($anio) || $anio <= 0) {
      echo "<h3>Por favor, introduce un año</h3>";
    } else {
      if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
        echo "<h3>El año $anio es bisiesto</h3>";
      } else {
        echo "<h3>El año $anio no es bisiesto</h3>";
      }
    }
  }
  ?>

</body>

</html>
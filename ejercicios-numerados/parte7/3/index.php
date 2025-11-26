<?php
include './funciones.php';

$numeros = [1,2,3,4,5,6,7,8,9,10];
?>

<!DOCTYPE html>
<html lang="es">

<body>
  <h1>Resultados</h1>

  <h3>1. Imprimir vector</h3>
  <?php imprimir_vector($numeros); ?>

  <h3>2. Cálculos</h3>
  <ul>
    <li>
      <strong>Media:</strong>
      <?php echo calcular_media($numeros); ?>
    </li>
    <li>
      <strong>Máximo:</strong>
      <?php echo calcular_maximo($numeros); ?>
    </li>
    <li>
      <strong>Mínimo:</strong>
      <?php echo calcular_minimo($numeros); ?>
    </li>
  </ul>
</body>

</html>
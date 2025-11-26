<?php

function calcular_media($array)
{
  if (count($array) == 0) return 0;
  return array_sum($array) / count($array);
}

function calcular_maximo($array)
{
  return max($array);
}

function calcular_minimo($array)
{
  return min($array);
}

function imprimir_vector($array)
{
  echo "<table border='1'>";
  echo "<tr><th>Posición</th><th>Valor</th></tr>";
  foreach ($array as $indice => $valor) {
    echo "<tr>";
    echo "<td>" . $indice . "</td>";
    echo "<td>" . $valor . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio Arrays</title>
</head>

<body>
  <h1>Resultados</h1>

  <h3>1. Imprimir Array (Tabla)</h3>
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
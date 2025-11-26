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

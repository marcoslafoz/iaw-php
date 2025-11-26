<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 1</title>
</head>

<body>

  <h2>Conversor de Números Romanos</h2>

  <form method="post">
    <label for="romano">Escribe un número romano:</label>
    <input type="text" name="romano" id="romano" required>
    <input type="submit" value="Convertir">
  </form>

  <br>

  <?php

  if (isset($_REQUEST['romano'])) {


    $texto = $_REQUEST['romano'];
    $romano = strtoupper($texto);

    $valores = [
      'M' => 1000,
      'D' => 500,
      'C' => 100,
      'L' => 50,
      'X' => 10,
      'V' => 5,
      'I' => 1
    ];

    $resultado = 0;
    $longitud = strlen($romano);

    for ($i = 0; $i < $longitud; $i++) {

      $valActual = $valores[$romano[$i]];

      $valSiguiente = 0;
      if ($i + 1 < $longitud) {
        $valSiguiente = $valores[$romano[$i + 1]];
      }

      if ($valActual < $valSiguiente) {
        $resultado = $resultado - $valActual;
      } else {
        $resultado = $resultado + $valActual;
      }
    }

    echo "<h3>El número romano <b>" . $romano . "</b> es igual a: <b>" . $resultado . "</b></h3>";
  }
  ?>

</body>

</html>
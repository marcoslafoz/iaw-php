<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Marcos Lafoz: Formulario con arrays</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      padding: 20px;
    }

    .resultado {
      padding: 10px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <h1>Marcos Lafoz: Formulario con arrays</h1>
  <h2>Tienda</h2>
  <form method="POST">
    <p>Elige tus productos:</p>
    <input type="checkbox" name="productos[]" value="Camiseta"> Camiseta (15 €)<br>
    <input type="checkbox" name="productos[]" value="Pantalon"> Zapatillas (30 €)<br>
    <input type="checkbox" name="productos[]" value="Gorra"> Gorra (10 €)<br>
    <br>
    <input type="submit" name="enviar" value="Comprar">
  </form>

  <?php
  if (isset($_POST['enviar'])) {
    $total = 0;

    $articulos = [
      "Camiseta" => 15,
      "Pantalon" => 30,
      "Gorra" => 10
    ];

    echo "<div class='resultado'>Has comprado: <br>";

    if (!empty($_POST['productos'])) {
      foreach ($_POST['productos'] as $producto) {
        $precio = $articulos[$producto];
        echo $producto . " " . $precio . "€ <br>";
        $total += $precio;
      }
      echo "</br>";
      echo "Total a pagar:" . $total . "€</br>";
    } else {
      echo "No has seleccionado nada";
    }
    echo "</div>";
  }
  ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .formulario {
    display: flex;
    flex-direction: column;
    max-width: 200px;
    gap: 5px
  }
</style>

<body>
  <form action="get" method="" class="formulario">
    <input type="text" name="nombre" required />
    <input type="text" name="apellido" required />
    <input type="number" name="edad" required />
    <input type="number" name="salario" required />
    <input type="submit" value="Enviar" />
  </form>

  <?php

  $nombre = $_GET['nombre'];
  $apellidos = $_GET['apellido'];
  $edad = $_GET['edad'];
  $salario = $_GET['salario'];

  $nuevo_salario = $salario;

  if ($salario > 2000) {
    $nuevo_salario = $salario;

  } else if ($salario >= 1000 && $salario <= 2000) {

    if ($edad > 45) {
      $nuevo_salario = $salario + ($salario * 0.03);
    } else if ($edad <= 45) {
      $nuevo_salario = $salario + ($salario * 0.1);
    }

  } else if ($salario < 1000) {
    if ($salario < 30) {
      $nuevo_salario = 1100;
    } else if ($edad >= 30 && $edad <= 45) {
      $nuevo_salario = $salario + ($salario * 0.03);
    } else if ($edad > 45) {
      $nuevo_salario = $salario + ($salario * 0.15);

    }
  }

  echo '<p>' . $nuevo_salario . '</p>';



  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcos Lafoz - Cálculo de Salario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    .contenedor {
      background: #ffffff;
      padding: 25px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      width: 320px;
    }

    h2, h3 {
      text-align: center;
      margin-top: 0;
      margin-bottom: 20px;
    }

    .formulario {
      display: flex;
      flex-direction: column;
    }

    .formulario input {
      margin-bottom: 15px;
    }

    .formulario input[type="text"],
    .formulario input[type="number"] {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
      width: 100%;
      box-sizing: border-box;
    }

    .formulario input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .resultado {
      margin-top: 20px;
      text-align: center;
      font-size: 1.1em;
      line-height: 1.5;
    }

    .resultado p {
      margin: 5px 0;
    }
  </style>
</head>

<body>

  <div class="contenedor">
    <h2>Calculadora de Aumento</h2>
    <h3>Marcos Lafoz</h3>

    <form action="" method="get" class="formulario">
      <input type="text" name="nombre" placeholder="Nombre" required />
      <input type="text" name="apellido" placeholder="Apellido" required />
      <input type="number" name="edad" placeholder="Edad" required />
      <input type="number" name="salario" placeholder="Salario Actual" required />
      <input type="submit" value="Calcular Nuevo Salario" />
    </form>

    <div class="resultado">
      <?php
      if (isset($_GET['salario']) && isset($_GET['edad']) && isset($_GET['nombre'])) {

        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        $salario = $_GET['salario'];
        $nuevo_salario = $salario;

        if ($salario > 2000) {
          $nuevo_salario = $salario;

        } else if ($salario >= 1000 && $salario <= 2000) {

          if ($edad > 45) {
            $nuevo_salario = $salario * 1.03;
          } else {
            $nuevo_salario = $salario * 1.10;
          }

        } else if ($salario < 1000) {

          if ($edad < 30) {
            $nuevo_salario = 1100;
          } else if ($edad >= 30 && $edad <= 45) {
            $nuevo_salario = $salario * 1.03;
          } else if ($edad > 45) {
            $nuevo_salario = $salario * 1.15;
          }
        }

        echo '<p>Hola <b>' . $nombre . '</b>,</p>';
        echo '<p>Tu nuevo salario es: <b>' . number_format($nuevo_salario, 2, ',', '.') . ' €</b></p>';
      }
      ?>
    </div>
  </div>

</body>

</html>
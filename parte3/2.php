<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejericio 2</title>
</head>
<style>
  td {
    
    width: 60px;
    height: 60px;
    border: 1px transparent;
  }

  .blanco {
    background: #ffffff;
  }

  .negro {
    background: #000000;
  }
</style>
<body>
  <?php

  /*
    Ejercicio 2. Escribe un programa que dado el valor de una variable dibuje un tablero cuadrado
    de ajedrez. Utiliza las etiquetas <table> <tr> <td> y la propiedad bgcolor=”#FFFFFF”
    o bgcolor=#000000
  */

  $tamanno = 8;

  echo '<h1>Tablero de ajedrez de '. $tamanno . ' x ' . $tamanno .  '</h1>';

  echo '<table>';
  for ($i = 1; $i <= $tamanno; $i++) {

    if($i % 2 == 0) {
      echo '<tr>';
      for ($x = 1; $x <= $tamanno; $x++) {
        if ($x % 2 == 0) {
          echo '<td class="negro"></td>';
        } else {
          echo '<td class="blanco"></td>';
        }
      };
      echo '</tr>';
    }else {
      echo '<tr>';
      for ($x = 1; $x <= $tamanno; $x++) {
        if ($x % 2 == 0) {
          echo '<td class="blanco"></td>';
        } else {
          echo '<td class="negro"></td>';
        }
      }
      ;
      echo '</tr>';
    };

    
  };

  echo '</table>';



  ?>
</body>
</html>


<?php

  /*
    Ejercicio 5. Dado un número, almacenado en una variable, muestra su tabla de multiplicar.
  */

  $numero = 10;
  echo '<h1>Tabla de multiplicar del ' . $numero . ' </h1>';

  for($i = 1; $i <= 10; $i++){
    echo $numero . ' x ' . $i . ' = ' . $numero * $i . '<br/>';
  };

?>
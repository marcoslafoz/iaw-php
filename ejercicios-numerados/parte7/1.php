<?php

function generar_tabla($n)
{

  for ($i = 1; $i <= 10; $i++) {
    echo $n . ' X ' . $i . ' = ' . $n * $i . '<br>';
  };
};

generar_tabla(10);


?>



<?php

/*
  Ejercicio 1: Escribe un script PHP que realice las siguientes acciones:
  - Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
  - Una vez que ha iniciado el array, imprimir todos los valores que almacena.
*/

$numeros_aleatorios = [];

$tamanno=10;
$n_min=10;
$n_max=30;

for ($i= 1; $i <= $n_max; $i++) { 
  
  $numeros_aleatorios[] = rand($n_min,$n_max);

};

echo '<ul>'; 

foreach ($numeros_aleatorios as $numero) {

  echo '<li>' . $numero . '</li>';

};

echo '</ul>';


?>
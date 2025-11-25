<?php

/*
  Ejercicio 2: Escribe un script PHP que realice las siguientes acciones:
  - Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
  - Una vez que ha iniciado el array, imprimir todos los valores que almacena.
  - Muestra la media de todos los valores, el valor máximo, y el valor mínimo.
  - Hazlo de forma artesanal
  - Hazlo utilizando funciones propias de PHP
*/

$numeros_aleatorios= [];

for($i = 1 ; $i <= 10 ; $i++){
  $numeros_aleatorios[] = rand(1,30);
};


// Imprimimos la lista
echo '<ul>';
foreach($numeros_aleatorios as $numero){
  echo '<li>' . $numero . '</li>';
};
echo '</ul>';

// Sacamos la media
$media = 0;
$max = 0;
$min = 30+1;
foreach($numeros_aleatorios as $numero){
  // Media
  $media = $media + $numero;
  // Maximo
  if($numero > $max) $max = $numero;
  // Minimo
  if($numero < $min) $min = $numero;
};

echo '<h1>Forma artesanal</h1>';
echo '<p> Media: ' . ($media / count($numeros_aleatorios))  . '</p>';
echo '<p> Maximo: ' . $max  . '</p>';
echo '<p> Minimo: ' . $min  . '</p>';
echo '<h1>Funciones de php</h1>';
echo '<p>Para la media no existe una funcion nativa en php</p>';
echo '<p> Maximo: ' . max($numeros_aleatorios) . '</p>';
echo '<p> Minimo: ' . min($numeros_aleatorios) . '</p>';






?>
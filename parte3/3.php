<?php 

/*
  Ejercicio 3. Dibuja una pirámide de dicha altura y con el correspondiente número * en cada
  altura.
*/

$altura = 10;
echo '<h1>Pirámide de ' . $altura . ' de altura</h1>';

for($i = 1 ; $i <= $altura; $i++){
  for ($x = 1; $x <= $i; $x++) {
    echo '*';
  };
  echo '<br/>';
}

?>
<?php 

/*
  Ejercicio 4. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una
  imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la
  estructura de control if - else.
*/


$aleatorio = rand(1,6);

echo "Aleatorio " . $aleatorio . "<br/>";

if($aleatorio == 1) {
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg" alt="1"/>';
} else if($aleatorio == 2){
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg" alt="2"/>';
} else if ($aleatorio == 3) {
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg" alt="3"/>';
} else if ($aleatorio == 4) {
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg" alt="4"/>';
} else if ($aleatorio == 5) {
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg" alt="5"/>';
} else if ($aleatorio == 6){
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg" alt="6"/>';
};


?>
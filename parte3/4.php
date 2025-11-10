<?php

/*
  Ejercicio 4. El juego de FizzBuzz. Muestra del 1 al 100 el resultado del juego FizzBuzz. Se
  mostrará el número por pantalla, salvo cuando el número sea múltiplo de 3 que se
  mostrará “Fizz”, o cuando sea múltiplo de 5 se mostrará “Buzz'', cuando sea múltiplo
  de 3 y 5 se mostrará “FizzBuzz”. ¿Sería fácil modificar tu código si en el futuro
  quisiera añadir los múltiplos de 7 con “Bum”?
*/

  $inicio = 1;
  $fin = 100;

  for($i = $inicio ; $i <= $fin ; $i++){

    if($i % 3 == 0 && !($i % 5 == 0)){
      echo $i .' -> Fizz <br/>';
    } else if($i % 5 == 0 && !($i % 3 == 0)) {
      echo $i . ' -> Buzz <br/>';
    } else if ($i % 3 == 0 && $i % 5 == 0) {
      echo $i . ' -> FizzBuzz <br/>';
    } else {
      echo $i . ' -> - <br/>';
    };
    
  };

?>
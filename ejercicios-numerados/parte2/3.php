<?php

/*
  Ejercicio 3. Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un
  mensaje indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes,
  2 martes, etc.
*/

$aleatorio = rand(1,7);

echo "El numero aleatorio es " . $aleatorio . "<br/>";

switch($aleatorio){
  case ($aleatorio == 1):
    echo "Lunes";
    break;
  case ($aleatorio == 2):
    echo "Martes";
    break;
  case ($aleatorio == 3):
    echo "Miercoles";
    break;
  case ($aleatorio == 4):
    echo "Jueves";
    break;
  case ($aleatorio == 5):
    echo "Viernes";
    break;
  case ($aleatorio == 6):
    echo "Sabado";
    break;
  case ($aleatorio == 7):
    echo "Domingo";
    break;
  default:
    echo "Dia invalido";
    break;
}

?>
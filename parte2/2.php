<?php

/*
  Ejercicio 2. Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una
  nota numérica y muestre un mensaje indicando la calificación obtenida teniendo en
  cuenta los siguientes rangos:
  - Insuficiente: [0, 5)
  - Suficiente: [5, 6)
  - Bien: [6, 7)
  - Notable: [7, 9)
  - Sobresaliente: [9, 10]
*/

$nota = rand(0,10);

echo "La nota es: " . $nota . "<br>";

switch($nota){
  case ($nota < 5):
    echo "Insuficiente";
    break;
  case ($nota >= 5 && $nota < 6):
    echo "Suficiente";
    break;
  case ($nota >= 6 && $nota < 7):
    echo "Bien";
    break;
  case ($nota >= 7 && $nota < 9):
    echo "Notable";
    break;
  case ($nota >= 9 && $nota <= 10):
    echo "Sobresaliente";
    break;
  default:
    echo "Nota no válida";
};

?>
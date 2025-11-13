<?php

/*
  Ejercicio 4. Dada una frase almacenada en una variable:
  - Muestra por pantalla la frase letras por letra
  - Debajo muestra la frase en orden inverso. Utiliza un bucle.
  - Muestra debajo el tamaño de la frase. El número de caracteres, contando espacios.
  - Muestra la frase en mayúsculas utilizando una función. strtoupper()
*/

$frase = "Hola mundo, esto es PHP";

$longitud = strlen($frase);

for ($i = 0; $i < $longitud; $i++) {
  echo $frase[$i] . "</br>";
}

$frase_inversa = "";

for ($i = $longitud - 1; $i >= 0; $i--) {
  $frase_inversa .= $frase[$i];
}

echo $frase_inversa;

echo "</br>";
echo "La frase tiene: " . $longitud . " caracteres.";
echo "</br>";

echo 'Frase en mayusculas: ' . strtoupper($frase);


?>
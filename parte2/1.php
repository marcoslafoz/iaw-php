
<?php

/*
  Ejercicio 1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y
  muestre una imagen con la cara o la cruz de la moneda.
*/

$aleatorio = rand(0, 1);

if ($aleatorio == 0) {
  echo '<img src="https://www.ecb.europa.eu/euro/coins/common/shared/img/at/Austria_1Euro.jpg" alt="Cara">';
} else {
  echo '<img src="https://numismaticaromacoins.com/wp-content/uploads/2024/10/1_Euro_Italy_2015_Romacoins.jpg" alt="Cruz">';
};

?>

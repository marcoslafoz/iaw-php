<?php

$username = 'usu';

// Expresion regular que valida que un nombre de usuario tenga mas de 5 caracteres
$patron_username = "/^[a-zA-Z0-9]{6,}$/";

// Expresion regular que valida que una contraseña tenga mas de 8 caracteres
$patron_contrasenna = "/^[a-zA-Z0-9]{5,}$/";

$es_valida = false;

if (preg_match($patron_username, $username)) {
  echo "El nombre es válido";
} else {
  echo "El nombre no es válido";
}

?>
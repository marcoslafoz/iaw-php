<?php
/*
  Ejercicio 7: Revisa la documentación http://php.net/reserved.variables.server para ver qué
  información podemos obtener de la variable superglobal $_SERVER. Muestra por
  pantalla lo siguiente:
  - La dirección IP del servidor donde se está ejecutando el script.
  - El nombre del host del servidor donde se está ejecutando el script.
  - El software que está utilizando el servidor para servir el script.
  - Información sobre el agente de usuario (User Agent) desde el que se está
  solicitando el script.
  - La dirección IP del cliente que está solicitando el script.
*/
echo "IP del servidor: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Agente de usuario: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "IP del cliente: " . $_SERVER['REMOTE_ADDR'] . "<br>";
?>
<?php
session_start();

$palabras = [
  "Árbol",
  "Tigre",
  "Playa",
  "Mango",
  "Rueda",
  "Lunes",
  "Gallo",
  "Nieve",
  "Mover",
  "Dulce",
  "Carta",
  "Llave",
  "Bruma",
  "Silla",
  "Fresa",
  "Canto",
  "Borde",
  "Flaco",
  "Barco",
  "Clara",
  "Campo",
  "Votar",
  "Salta",
  "Pared",
  "Tenis",
  "Jugar",
  "Viento",
  "Mesa",
  "Broma",
  "Rampa",
  "Biste",
  "Lloro",
  "Verde",
  "Huevo",
  "Ríos",
  "Trago",
  "Zorro",
  "Resto",
  "Copa",
  "Rezar",
  "Manto",
  "Nubes",
  "Marea",
  "Lejos",
  "Globo",
  "Junto",
  "Nacer",
  "Nadar",
  "Zebra",
  "Rosas",
  "Libro",
  "Pardo",
  "Crema",
  "Mano",
  "Mural",
  "Vacio",
  "Punto",
  "Cielo",
  "Metal",
  "Girar",
  "Truco",
  "Risas",
  "Besar",
  "Grano",
  "Ronda",
  "Luzco",
  "Cerca",
  "Banda",
  "Morro",
  "Patio",
  "Burro",
  "Largo",
  "Joven",
  "Freno",
  "Suelo",
  "Bosco",
  "Volar",
  "Rápido",
  "Graba",
  "Reina",
  "Toque",
  "Nieve",
  "Brisa",
  "Riego",
  "Fruta",
  "Tonto",
  "Rival",
  "Mente",
  "Lanza",
  "Ruego",
  "Fallo",
  "Roca",
  "Borde",
  "Furia",
  "Calor",
  "Calle",
  "Torre",
  "Miedo",
  "Ciclo",
  "Goma"
];

if (isset($_POST['reset']) || !isset($_SESSION['palabra'])) {
  $azar = rand(0, count($palabras) - 1);
  $_SESSION['palabra'] = strtoupper($palabras[$azar]);
  $_SESSION['letras_usadas'] = [];
  $_SESSION['puntos'] = 0;
  $_SESSION['mensaje'] = "Adivina la palabra de 5 letras.";
}

if (isset($_POST['letra'])) {
  $letra = strtoupper($_POST['letra']);

  if (!in_array($letra, $_SESSION['letras_usadas']) && $letra != "") {
    $_SESSION['letras_usadas'][] = $letra;

    if (str_contains($_SESSION['palabra'], $letra)) {
      $_SESSION['puntos'] += 10;
      $_SESSION['mensaje'] = "La letra $letra existe.";
    } else {
      $_SESSION['puntos'] -= 2;
      $_SESSION['mensaje'] = "Fallo. La letra $letra no existe.";
    }
  } else {
    $_SESSION['mensaje'] = "Ya has usado la letra $letra o está vacía.";
  }
}

$palabra_oculta = "";
$letras_acertadas = 0;
$longitud = strlen($_SESSION['palabra']);

for ($i = 0; $i < $longitud; $i++) {
  $caracter = substr($_SESSION['palabra'], $i, 1);
  if (in_array($caracter, $_SESSION['letras_usadas'])) {
    $palabra_oculta .= $caracter . " ";
    $letras_acertadas++;
  } else {
    $palabra_oculta .= "_ ";
  }
}

$juego_terminado = ($letras_acertadas == $longitud);
?>

<!DOCTYPE html>
<html lang="es">

<body>
  <h1>Juego de Palabras</h1>

  <h2>Palabra: <?php echo $palabra_oculta; ?></h2>
  <p>Puntuación: <b><?php echo $_SESSION['puntos']; ?></b></p>
  <p><?php echo $_SESSION['mensaje']; ?></p>

  <?php if (!$juego_terminado): ?>
    <form method="post">
      <label>Elige una letra:</label>
      <input type="text" name="letra" maxlength="1" required autofocus autocomplete="off">
      <input type="submit" value="Probar">
    </form>
  <?php else: ?>
    <h2>Has completado la palabra.</h2>
  <?php endif; ?>

  <br>
  <form method="post">
    <input type="submit" name="reset" value="Reiniciar Juego">
  </form>

  <p>Letras usadas: <?php echo implode(", ", $_SESSION['letras_usadas']); ?></p>
</body>

</html>
<!DOCTYPE html>
<html>

<body>
  <form method="post">
    <select name="jugador">
      <option value="piedra">Piedra</option>
      <option value="papel">Papel</option>
      <option value="tijera">Tijera</option>
    </select>
    <input type="submit" value="Jugar">
  </form>

  <?php
  if (isset($_REQUEST['jugador'])) {
    $jugador = $_REQUEST['jugador'];
    $azar = rand(0, 2);
    $opciones = ["piedra", "papel", "tijera"];
    $pc = $opciones[$azar];

    echo "<h2>Jugador: $jugador | PC: $pc</h2>";

    if ($jugador == $pc) {
      echo "Empate";
    } elseif (
      ($jugador == "piedra" && $pc == "tijera") ||
      ($jugador == "papel" && $pc == "piedra") ||
      ($jugador == "tijera" && $pc == "papel")
    ) {
      echo "Jugador gana";
    } else {
      echo "Ordenador gana";
    }
  }
  ?>
</body>

</html>
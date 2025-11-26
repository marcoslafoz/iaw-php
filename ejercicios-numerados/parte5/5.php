<!DOCTYPE html>
<html>

<body>
  <form method="post">
    <input type="number" name="n1" required step="any">
    <select name="operacion">
      <option value="+">Suma (+)</option>
      <option value="-">Resta (-)</option>
      <option value="*">Multiplicación (*)</option>
      <option value="/">División (/)</option>
    </select>
    <input type="number" name="n2" required step="any">
    <input type="submit" value="Calcular">
  </form>

  <?php
  if (isset($_REQUEST['n1']) && isset($_REQUEST['n2'])) {
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $op = $_REQUEST['operacion'];
    $resultado = 0;

    switch ($op) {
      case '+':
        $resultado = $n1 + $n2;
        break;
      case '-':
        $resultado = $n1 - $n2;
        break;
      case '*':
        $resultado = $n1 * $n2;
        break;
      case '/':
        if ($n2 != 0) {
          $resultado = $n1 / $n2;
        } else {
          $resultado = "No válido";
        }
        break;
    }

    echo "<h3>Tu operación $n1 $op $n2 = $resultado</h3>";
  }
  ?>
</body>

</html>
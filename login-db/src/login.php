<?php

$host = '127.0.0.1';
$user = 'mariadb';
$pass = 'mariadb';
$db = 'logindb';
$port = 3306;

// Conexión con control de errores básico
$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
  die("Fallo al conectar con Docker: " . $conn->connect_error .
    "<br>Asegúrate de haber hecho 'docker-compose up'");
}

// CREAR TABLA SI NO EXISTE (Para que sea plug & play)
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
$conn->query($sql);

// OBTENER DATOS
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// 1. VALIDACIONES REQUERIDAS
if (strlen($username) <= 3) {
  die("Error: El usuario debe tener más de 3 caracteres. <a href='index.php'>Volver</a>");
}
if (strlen($password) <= 5) {
  die("Error: La contraseña debe tener más de 5 caracteres. <a href='index.php'>Volver</a>");
}

// 2. LÓGICA PRINCIPAL
// Buscamos si el usuario existe
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  // --- CASO A: EL USUARIO EXISTE (LOGIN) ---
  $row = $result->fetch_assoc();
  // Verificamos si la contraseña coincide con el hash guardado
  if (password_verify($password, $row['password'])) {
    echo "<h1>¡Bienvenido de nuevo!</h1>";
    echo "Has iniciado sesión correctamente como: " . htmlspecialchars($username);
  } else {
    echo "<h1>Error de acceso</h1>";
    echo "La contraseña es incorrecta.";
  }
} else {
  // --- CASO B: EL USUARIO NO EXISTE (REGISTRO) ---
  // Encriptamos la contraseña
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $insert_stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $insert_stmt->bind_param("ss", $username, $hashed_password);

  if ($insert_stmt->execute()) {
    echo "<h1>¡Cuenta Creada!</h1>";
    echo "El usuario <b>$username</b> no existía, así que lo hemos registrado.";
  } else {
    echo "Error al guardar en base de datos.";
  }
}

$conn->close();
?>
<br><br>
<a href="index.php">Volver al inicio</a>

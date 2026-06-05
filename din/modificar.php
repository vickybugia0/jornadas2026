<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "comedor_escolar";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$persona = null;
$error = "";

// --- Caso 1: si viene por GET (mostrar el formulario)
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM personas WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $persona = $resultado->fetch_assoc();
    $stmt->close();
}

// --- Caso 2: si viene por POST (actualizar en la DB)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = intval($_POST['id']);
    $apellido = trim($_POST['apellido']);
    $nombre = trim($_POST['nombre']);

    if ($apellido && $nombre) {
        $stmt = $conn->prepare("UPDATE personas SET apellido=?, nombre=? WHERE id=?");
        $stmt->bind_param("ssi", $apellido, $nombre, $id);
        if ($stmt->execute()) {
            header("Location: seleccionar.php");
            exit;
        } else {
            $error = "Error al modificar: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $error = "Completa todos los campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Modificar Persona</title>
<style>
/* estilos igual que antes */
body{font-family:Arial,sans-serif;background:linear-gradient(135deg,#74ebd5,#9face6);display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
.container{background:#fff;padding:30px;border-radius:15px;box-shadow:0 4px 15px rgba(0,0,0,0.2);width:350px;text-align:center}
h2{margin-bottom:20px;color:#333}
label{display:block;margin:10px 0 5px;font-weight:bold;color:#444}
input[type="text"]{width:90%;padding:10px;margin-bottom:15px;border:1px solid #ccc;border-radius:8px;font-size:14px}
input[type="submit"],input[type="reset"]{padding:10px 20px;margin:10px 5px;border:none;border-radius:8px;cursor:pointer;font-weight:bold;transition:.3s}
input[type="submit"]{background:#2196F3;color:#fff}
input[type="submit"]:hover{background:#1976D2}
.error{color:#c00;margin-bottom:10px}
</style>
</head>
<body>
<div class="container">
    <h2>Modificar Persona</h2>
    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php if ($persona): ?>
        <form action="modificar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $persona['id']; ?>">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $persona['apellido']; ?>" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $persona['nombre']; ?>" required>

            <input type="submit" value="Guardar cambios">
            <input type="reset" value="Limpiar">
        </form>
    <?php else: ?>
        <p>No se encontró la persona.</p>
        <a href="seleccionar.php">Volver</a>
    <?php endif; ?>
</div>
</body>
</html>

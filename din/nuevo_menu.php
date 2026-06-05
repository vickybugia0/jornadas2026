<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "comedor_escolar";
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$mensaje = "";

// Si se envió el formulario
if (isset($_POST['guardar'])) {
    $nombre = $conn->real_escape_string($_POST['nombre_plato']);
    $tipo = $conn->real_escape_string($_POST['tipo']);
    $calorias = intval($_POST['calorias']);

   $usuario = $_SESSION['usuario'];
$sql = "INSERT INTO menus (nombre_plato, tipo, calorias, usuario) 
        VALUES ('$nombre', '$tipo', $calorias, '$usuario')";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "<p style='color:green;text-align:center;'>✅ Plato agregado correctamente</p>";
    } else {
        $mensaje = "<p style='color:red;text-align:center;'>❌ Error: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nuevo Plato</title>
<style>
body{font-family:Arial,sans-serif;background:linear-gradient(135deg,#fbc2eb,#a6c1ee);display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
.container{background:#fff;padding:30px;border-radius:15px;box-shadow:0 4px 15px rgba(0,0,0,0.2);width:400px;text-align:center}
input,select{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:8px;font-size:14px}
.botones{display:flex;justify-content:space-between;margin-top:15px}
input[type="submit"], .volver{width:48%;padding:10px;border:none;border-radius:8px;font-weight:bold;cursor:pointer;transition:.3s;text-decoration:none;text-align:center}
input[type="submit"]{background:#4CAF50;color:#fff}
input[type="submit"]:hover{background:#388E3C}
.volver{background:#9E9E9E;color:#fff}
.volver:hover{background:#757575}
</style>
</head>
<body>
<div class="container">
    <h2>Cargar Nuevo Plato</h2>
    <?php echo $mensaje; ?>
    <form method="POST">
        <label>Nombre del Plato</label>
        <input type="text" name="nombre_plato" required>
        
        <label>Tipo</label>
        <select name="tipo" required>
            <option value="">-- Seleccione --</option>
            <option value="Almuerzo">Almuerzo</option>
            <option value="Cena">Cena</option>
            <option value="Merienda">Merienda</option>
        </select>
        
        <label>Calorías</label>
        <input type="number" name="calorias" required>
        
        <div class="botones">
            <input type="submit" name="guardar" value="Guardar Plato">
            <a href="seleccionar_menu.php" class="volver">⬅ Volver</a>
        </div>
    </form>
</div>
</body>
</html>

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
$usuario = $_SESSION['usuario'];

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$mensaje = "";

if (isset($_GET['id_menu'])) {
    $id_menu = intval($_GET['id_menu']);
   $usuario = $_SESSION['usuario'];
$resultado = $conn->query("SELECT id_menu, nombre_plato, tipo, calorias 
                           FROM menus 
                           WHERE usuario = '$usuario'
                           ORDER BY tipo, nombre_plato");

    $plato = $resultado->fetch_assoc();
}


if (isset($_POST['guardar'])) {
    $id_menu = intval($_POST['id_menu']);
    $nombre = $conn->real_escape_string($_POST['nombre_plato']);
    $tipo = $conn->real_escape_string($_POST['tipo']);
    $calorias = intval($_POST['calorias']);

    $sql = "SELECT * FROM menus WHERE id_menu = $id AND usuario = '$usuario'";


    if ($conn->query($sql) === TRUE) {
        $mensaje = "<p style='color:green;text-align:center;'>✅ Plato modificado correctamente</p>";
    } else {
        $mensaje = "<p style='color:red;text-align:center;'>❌ Error: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Modificar Plato</title>
<style>
body{font-family:Arial,sans-serif;background:linear-gradient(135deg,#84fab0,#8fd3f4);display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
.container{background:#fff;padding:30px;border-radius:15px;box-shadow:0 4px 15px rgba(0,0,0,0.2);width:400px}
input,select{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:8px;font-size:14px}
input[type="submit"], .volver{width:48%;display:inline-block;text-align:center;background:#2196F3;color:#fff;text-decoration:none;border:none;padding:10px;border-radius:8px;font-weight:bold;cursor:pointer;transition:.3s}
input[type="submit"]:hover{background:#1976D2}
.volver{background:#9E9E9E}
.volver:hover{background:#757575}
.botones{display:flex;justify-content:space-between}
</style>
</head>
<body>
<div class="container">
    <h2>Modificar Plato</h2>
    <?php echo $mensaje; ?>

    <?php if (isset($plato)): ?>
    <form method="POST">
        <input type="hidden" name="id_menu" value="<?php echo $plato['id_menu']; ?>">
        
        <label>Nombre del Plato</label>
        <input type="text" name="nombre_plato" value="<?php echo $plato['nombre_plato']; ?>" required>
        
        <label>Tipo</label>
        <select name="tipo" required>
            <option value="Almuerzo" <?php if($plato['tipo']=="Almuerzo") echo "selected"; ?>>Almuerzo</option>
            <option value="Cena" <?php if($plato['tipo']=="Cena") echo "selected"; ?>>Cena</option>
            <option value="Merienda" <?php if($plato['tipo']=="Merienda") echo "selected"; ?>>Merienda</option>
        </select>
        
        <label>Calorías</label>
        <input type="number" name="calorias" value="<?php echo $plato['calorias']; ?>" required>
        
        <div class="botones">
            <input type="submit" name="guardar" value="Guardar Cambios">
            <a href="seleccionar_menu.php" class="volver">⬅ Volver</a>
        </div>
    </form>
    <?php else: ?>
        <p style="color:red;">❌ No se encontró el plato.</p>
        <a href="seleccionar_menu.php" class="volver">⬅ Volver</a>
    <?php endif; ?>
</div>
</body>
</html>

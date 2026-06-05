<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "comedor_escolar";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$resultado = $conn->query("SELECT id, apellido, nombre FROM personas ORDER BY apellido, nombre");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Buscar Persona</title>
<style>
body{font-family:Arial,sans-serif;background:linear-gradient(135deg,#74ebd5,#9face6);display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
.container{background:#fff;padding:30px;border-radius:15px;box-shadow:0 4px 15px rgba(0,0,0,0.2);width:350px;text-align:center}
input[list],input[type="submit"]{width:90%;padding:10px;margin:15px 0;border:1px solid #ccc;border-radius:8px;font-size:14px}
input[type="submit"]{background:#2196F3;color:#fff;border:none;cursor:pointer;font-weight:bold;transition:.3s}
input[type="submit"]:hover{background:#1976D2}
</style>
</head>
<body>
<div class="container">
    <h2>Buscar Persona</h2>
    <form action="modificar.php" method="GET">
        <!-- Campo de búsqueda -->
        <input list="personas" name="id" placeholder="Escriba un apellido o nombre" required>
        <datalist id="personas">
            <?php while($fila = $resultado->fetch_assoc()): ?>
                <option value="<?php echo $fila['id']; ?>">
                    <?php echo $fila['apellido'] . ", " . $fila['nombre']; ?>
                </option>
            <?php endwhile; ?>
        </datalist>
        <input type="submit" value="Modificar">
    </form>
</div>
</body>
</html>

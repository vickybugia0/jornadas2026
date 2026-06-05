<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "comedor_escolar";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$resultado = $conn->query("SELECT id_menu, nombre_plato, tipo, calorias FROM menus ORDER BY tipo, nombre_plato");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Buscar Plato</title>
<style>
body{
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#ff9a9e,#fad0c4);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}
.container{
    background:#fff;
    padding:30px;
    border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.2);
    width:380px;
    text-align:center;
}
input[list],input[type="submit"],.nuevo{
    width:90%;
    padding:10px;
    margin:15px 0;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:14px;
}
input[type="submit"]{
    background:#4CAF50;
    color:#fff;
    border:none;
    cursor:pointer;
    font-weight:bold;
    transition:.3s;
}
input[type="submit"]:hover{background:#388E3C}
.nuevo{
    background:#2196F3;
    color:#fff;
    text-decoration:none;
    display:inline-block;
    cursor:pointer;
    font-weight:bold;
    transition:.3s;
}
.nuevo:hover{background:#1976D2}

/* 🔹 Botón Cerrar Sesión (esquina inferior derecha) */
.logout{
    position:fixed;
    bottom:15px;
    right:15px;
    background:#f44336;
    color:#fff;
    padding:8px 12px;
    border-radius:6px;
    font-size:13px;
    text-decoration:none;
    font-weight:bold;
    box-shadow:0 2px 5px rgba(0,0,0,0.2);
    transition:.3s;
}
.logout:hover{
    background:#d32f2f;
}
</style>
</head>
<body>
<div class="container">
    <h2>Buscar Plato</h2>
    <form action="modificar_menu.php" method="GET">
        <input list="menus" name="id_menu" placeholder="Escriba el nombre del plato" required>
        <datalist id="menus">
            <?php while($fila = $resultado->fetch_assoc()): ?>
                <option value="<?php echo $fila['id_menu']; ?>">
                    <?php echo $fila['nombre_plato'] . " (" . $fila['tipo'] . ") - " . $fila['calorias'] . " cal"; ?>
                </option>
            <?php endwhile; ?>
        </datalist>
        <input type="submit" value="Modificar">
    </form>

    <!-- 🔹 Botón para ir a cargar un nuevo menú -->
    <a href="nuevo_menu.php" class="nuevo">➕ Agregar nuevo menú</a>
</div>

<!-- 🔒 Botón pequeño en esquina inferior derecha -->
<a href="logout.php" class="logout">Cerrar sesión</a>
</body>
</html>

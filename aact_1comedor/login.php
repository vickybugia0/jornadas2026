<?php
session_start();
include("conexion.php");

// Validar que los campos existen y no están vacíos
if (!isset($_POST['usuario']) || !isset($_POST['password']) || 
    empty(trim($_POST['usuario'])) || empty(trim($_POST['password']))) {
    echo "
    <h2 style='
        text-align:center;
        margin-top:100px;
        font-family:Poppins;
        color:#243447;
    '>
        Por favor, complete todos los campos
    </h2>
    ";
    exit;
}

$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);

// Usar consultas preparadas para evitar inyección SQL
$sql = "SELECT id, usuario, contraseña FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conexion->error);
}

$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $datos = $resultado->fetch_assoc();
    
    // Verificar la contraseña (idealmente usar password_verify si guardas hash)
    if ($datos['contraseña'] === $password) {
        $_SESSION['usuario'] = $datos['usuario'];
        $_SESSION['id_usuario'] = $datos['id'];
        header("Location: menu.php");
        exit;
    }
}

// Si llegamos aquí, credenciales incorrectas
echo "
<h2 style='
    text-align:center;
    margin-top:100px;
    font-family:Poppins;
    color:#243447;
'>
    Usuario o contraseña incorrectos
</h2>
";

$stmt->close();
$conexion->close();
?>

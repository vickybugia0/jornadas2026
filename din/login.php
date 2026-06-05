<?php
session_start();

// Si ya está logueado, lo manda directo al selector
if (isset($_SESSION['usuario'])) {
    header("Location: seleccionar_menu.php");
    exit();
}

$mensaje = "";

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $clave = trim($_POST['clave']);

    // Usuarios válidos (pueden agregarse más)
    $usuarios_validos = [
        "matias" => "Talleres1913",
        "juan"   => "Newton25"
    ];

    // Validar usuario y contraseña
    if (isset($usuarios_validos[$usuario]) && $usuarios_validos[$usuario] === $clave) {
        $_SESSION['usuario'] = $usuario;
        header("Location: seleccionar_menu.php");
        exit();
    } else {
        $mensaje = "<p style='color:red;text-align:center;'>❌ Usuario o contraseña incorrectos</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login - Comedor Escolar</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #89f7fe, #66a6ff);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.container {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    width: 350px;
    text-align: center;
}
input {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
}
input[type="submit"] {
    background: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}
input[type="submit"]:hover {
    background: #388E3C;
}
h2 {
    color: #333;
}
</style>
</head>
<body>
<div class="container">
    <h2>Iniciar Sesión</h2>
    <?php echo $mensaje; ?>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="clave" placeholder="Contraseña" required>
        <input type="submit" value="Ingresar">
    </form>
</div>
</body>
</html>


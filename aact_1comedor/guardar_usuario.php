<?php
session_start();
include("conexion.php");

// Validar que los campos existen y no están vacíos
if (!isset($_POST['nombre']) || !isset($_POST['usuario']) || !isset($_POST['password']) ||
    empty(trim($_POST['nombre'])) || empty(trim($_POST['usuario'])) || empty(trim($_POST['password']))) {
    echo "Error: Todos los campos son obligatorios";
    exit;
}

$nombre = trim($_POST['nombre']);
$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);

// Usar consulta preparada para evitar inyección SQL
$sql = "INSERT INTO usuarios (nombre, usuario, contraseña) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conexion->error);
}

$stmt->bind_param("sss", $nombre, $usuario, $password);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    echo "Error al guardar el usuario: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
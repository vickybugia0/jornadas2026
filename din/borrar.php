<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "comedor_escolar";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se ha enviado un ID de registro para eliminar
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]); // Convertir a entero por seguridad

    // Preparar la consulta de eliminación
    $stmt = $conn->prepare("DELETE FROM personal WHERE orden = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "El registro se eliminó correctamente.";
        } else {
            echo "No se encontró el registro o no se pudo eliminar.";
        }
    } else {
        echo "Error al eliminar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<a href="index.php" target="_self">Volver</a>

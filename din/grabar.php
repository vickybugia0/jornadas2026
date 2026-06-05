<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "comedor_escolar";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


// Conexión
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar si se envió POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $apellido = $_POST['fapellido'] ?? '';
    $nombre   = $_POST['fnombre'] ?? '';

    if ($apellido && $nombre) {
        $stmt = $conn->prepare("INSERT INTO personas (apellido, nombre) VALUES (?, ?)");
        $stmt->bind_param("ss", $apellido, $nombre);
        if ($stmt->execute()) {
            echo "<p style='color:green;'>Persona agregada correctamente.</p>";
        } else {
            echo "<p style='color:red;'>Error al guardar: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p style='color:red;'>Debe completar todos los campos.</p>";
    }
}

// Mostrar tabla de personas
$result = $conn->query("SELECT id, apellido, nombre FROM personas");
?>

<h2>Lista de Personas</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Apellido</th>
        <th>Nombre</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . htmlspecialchars($row['apellido']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No hay personas registradas.</td></tr>";
    }

    $conn->close();
    ?>
<br>
<a href="formulario.html">Volver al formulario</a>


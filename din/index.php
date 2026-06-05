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

// Si la conexión se establece correctamente
echo "Conexión exitosa<br><br>";

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);

// Verificar si hay registros devueltos
if ($result->num_rows > 0) {
    // Imprimir los registros en una lista
    while ($row = $result->fetch_assoc()) {
?>
        <a href="borrar.php?id=<?php echo $row["id_alumno"]; ?>" target="_self">
            <?php echo $row["id_alumno"]; ?>
        </a>
        <?php echo $row["apellido"]; ?> - <?php echo $row["nombre"]; ?>
        <br>
<?php 
    }
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión
$conn->close();
?>

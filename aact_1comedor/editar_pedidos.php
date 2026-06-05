<?php

include("conexion.php");

$id = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM pedidos WHERE id=$id");

$fila = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Pedido</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Editar Pedido</h2>

<form action="actualizar_pedido.php" method="POST">

<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

<input type="text" name="nombre"
value="<?php echo $fila['nombre']; ?>">

<select name="menu">

<option>Celíaco</option>
<option>Vegetariano</option>
<option>Vegano</option>
<option>Diabético</option>
<option>Intolerante a la lactosa</option>
<option>Dieta</option>

</select>

<input type="date" name="fecha"
value="<?php echo $fila['fecha']; ?>">

<button type="submit">Guardar Cambios</button>

</form>

<br>

<a href="ver_pedidos.php">
<button>⬅ Volver</button>
</a>

</div>

</body>
</html>
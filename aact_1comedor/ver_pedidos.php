<?php

include("conexion.php");

$resultado = $conexion->query(
"SELECT * FROM pedidos"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Pedidos</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="sidebar">

    <div>

        <div class="brand">

            <h2>
                Instituto<br>
                Tecnologico<br>
                Isaac Newton
            </h2>

        </div>

        <div class="menu-links">

            <a href="menu.php">
                Inicio
            </a>

            <a href="pedidos.php">
                Nuevo Pedido
            </a>

            <a href="ver_pedidos.php" class="active-link">
                Pedidos
            </a>

            <a href="usuarios.php">
                Usuarios
            </a>

        </div>

    </div>

    <div class="bottom-menu">

        <a href="logout.php">
            Cerrar sesión
        </a>

    </div>

</div>

<div class="main">

    <div class="topbar">

        <h1>
            Gestión de Pedidos
        </h1>

        <p>
            Administración general de pedidos registrados.
        </p>

    </div>

    <div class="card-dashboard">

        <table>

            <tr>

                <th>Nombre</th>
                <th>Menú</th>
                <th>Fecha</th>

            </tr>

            <?php while($fila = $resultado->fetch_assoc()) { ?>

            <tr>

                <td>
                    <?php echo $fila['nombre']; ?>
                </td>

                <td>
                    <?php echo $fila['menu_elegido']; ?>
                </td>

                <td>
                    <?php echo $fila['fecha']; ?>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>
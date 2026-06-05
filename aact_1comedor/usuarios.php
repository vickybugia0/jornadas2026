<?php

include("conexion.php");

$resultado = $conexion->query(
"SELECT * FROM usuarios"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Usuarios</title>

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

            <a href="ver_pedidos.php">
                Pedidos
            </a>

            <a href="usuarios.php" class="active-link">
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
            Usuarios Registrados
        </h1>

        <p>
            Gestión y administración de usuarios.
        </p>

    </div>

    <div class="card-dashboard">

        <table>

            <tr>

                <th>Nombre</th>
                <th>Usuario</th>
                <th>Eliminar</th>

            </tr>

            <?php while($fila = $resultado->fetch_assoc()) { ?>

            <tr>

                <td>
                    <?php echo $fila['nombre']; ?>
                </td>

                <td>
                    <?php echo $fila['usuario']; ?>
                </td>

                <td>

                    <a href="eliminar_usuario.php?id=<?php echo $fila['id']; ?>">

                        <button class="secondary">
                            Eliminar
                        </button>

                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>
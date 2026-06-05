<?php

include("conexion.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Nuevo Pedido</title>

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

            <a href="pedidos.php" class="active-link">
                Nuevo Pedido
            </a>

            <a href="ver_pedidos.php">
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
            Nuevo Pedido
        </h1>

        <p>
            Registrar solicitud de menú.
        </p>

    </div>

    <div class="card-dashboard">

        <form action="guardar_pedido.php" method="POST">

            <input
            type="text"
            name="nombre"
            placeholder="Nombre completo"
            required
            >

            <input
            type="text"
            name="cargo"
            placeholder="Cargo"
            required
            >

            <select name="menu">

                <option>Celíaco</option>
                <option>Vegetariano</option>
                <option>Vegano</option>
                <option>Diabético</option>
                <option>Intolerante a la lactosa</option>
                <option>Dieta</option>

            </select>

            <input
            type="date"
            name="fecha"
            min="<?php echo date('Y-m-d'); ?>"
            required
            >

            <button type="submit">
                Guardar Pedido
            </button>

        </form>

    </div>

</div>

</body>
</html>
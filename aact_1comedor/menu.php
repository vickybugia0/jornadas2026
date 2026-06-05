<?php

include("conexion.php");

if(!isset($_SESSION['usuario'])){
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Panel Principal</title>

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

            <a href="menu.php" class="active-link">
                Inicio
            </a>

            <a href="pedidos.php">
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
            Panel Principal
        </h1>

        <p>
            Bienvenida/o
            <b>
                <?php echo $_SESSION['usuario']; ?>
            </b>
        </p>

    </div>

    <div class="cards">

        <div class="card-dashboard">

            <h3>
                Nuevo Pedido
            </h3>

            <p>
                Registrar nuevos pedidos alimentarios.
            </p>

            <a href="pedidos.php">

                <button>
                    Ingresar
                </button>

            </a>

        </div>

        <div class="card-dashboard">

            <h3>
                Gestión de Pedidos
            </h3>

            <p>
                Visualizar y administrar pedidos.
            </p>

            <a href="ver_pedidos.php">

                <button>
                    Ver pedidos
                </button>

            </a>

        </div>

        <div class="card-dashboard">

            <h3>
                Usuarios
            </h3>

            <p>
                Administración de usuarios registrados.
            </p>

            <a href="usuarios.php">

                <button>
                    Gestionar
                </button>

            </a>

        </div>

    </div>

</div>

</body>
</html>
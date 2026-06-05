<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Iniciar Sesión</title>

<link rel="stylesheet" href="style.css">

</head>

<body class="login-body">

<div class="container">

<h1>
Instituto Tecnologico Isaac Newton
</h1>

<p class="subtitle">
Sistema de Gestión de Comedor
</p>

<form action="login.php" method="POST">

<input
type="text"
name="usuario"
placeholder="Usuario"
required
>

<input
type="password"
name="password"
placeholder="Contraseña"
required
>

<button type="submit">
Ingresar
</button>

</form>

<a href="registro.php">

<button class="secondary">
Crear Usuario
</button>

</a>

</div>

</body>
</html>
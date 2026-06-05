<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Registro</title>

<link rel="stylesheet" href="style.css">

</head>

<body class="login-body">

<div class="container">

<h2>
Crear Usuario
</h2>

<p class="subtitle">
Registro de nuevos usuarios
</p>

<form action="guardar_usuario.php" method="POST">

<input
type="text"
name="nombre"
placeholder="Nombre completo"
required
>

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
Guardar Usuario
</button>

</form>

<a href="index.php">

<button class="secondary">
Volver
</button>

</a>

</div>

</body>
</html>
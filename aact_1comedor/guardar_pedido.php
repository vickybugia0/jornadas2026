<?php

include("conexion.php");

$hora_actual = date("H");

if($hora_actual >= 13){

echo "

<h2 style='
text-align:center;
margin-top:100px;
font-family:Poppins;
color:#243447;
'>

Los pedidos solo pueden realizarse
antes de las 13:00 hs

</h2>

";

exit();

}

$nombre = $_POST['nombre'];

$cargo = $_POST['cargo'];

$menu = $_POST['menu'];

$fecha = $_POST['fecha'];

$id_usuario = $_SESSION['id_usuario'];

$sql = "INSERT INTO pedidos(

nombre,
cargo,
menu_elegido,
fecha,
usuario_id

)

VALUES(

'$nombre',
'$cargo',
'$menu',
'$fecha',
'$id_usuario'

)";

if($conexion->query($sql)){

header("Location:ver_pedidos.php");

}else{

echo "Error";

}

?>
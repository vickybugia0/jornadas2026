<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$menu = $_POST['menu'];
$fecha = $_POST['fecha'];

$sql = "UPDATE pedidos

SET nombre='$nombre',
menu_elegido='$menu',
fecha='$fecha'

WHERE id=$id";

if($conexion->query($sql)){

    header("Location: ver_pedidos.php");

}else{

    echo "Error";

}

?>
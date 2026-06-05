<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM pedidos WHERE id=$id";

if($conexion->query($sql)){

    header("Location: ver_pedidos.php");

}else{

    echo "Error";

}

?>
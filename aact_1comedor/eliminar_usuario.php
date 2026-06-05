<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM usuarios
WHERE id=$id";

if($conexion->query($sql)){

header("Location:usuarios.php");

}else{

echo "Error";

}

?>
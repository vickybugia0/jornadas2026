<?php

$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "comedor"
);

if($conexion->connect_error){

    die("Error de conexión");

}

session_start();

?>
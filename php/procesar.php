<?php


session_start();

$nombre_usuario = $_POST["nombre"];

// Establecer la cookie con el nombre del usuario
setcookie("usuario", $nombre_usuario);

// Verificar si la cookie está seteada en la siguiente solicitud
if(isset($_COOKIE["usuario"])){
    echo "Bienvenido $nombre_usuario";
} else {
    echo "Error: No se ha introducido un usuario";
}




?>


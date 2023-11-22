<?php


session_start();

if (isset($_SESSION["nombre"]) && isset($_SESSION["apellido"])) {
    $nombre_usuario = $_SESSION["nombre"];
    $apellido_usuario = $_SESSION["apellido"];
}



echo("Bienvenido a la pagina $nombre_usuario $apellido_usuario");
?>
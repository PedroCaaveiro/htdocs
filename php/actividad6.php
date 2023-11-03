<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actividad 6 PHP</title>
</head>
<body>

<?php
$mensaje="Hola mundo";

// 1 muestre por pantalla el mensaje "hola mundo
echo("$mensaje <br><br>");
// 2 convierta este mensaje en un array
$mensaje_Array=explode(" ",$mensaje);



 // muestre el valor del indice  de ese array 

echo $mensaje_Array[0];
// convertimos en string

$frase=implode($mensaje_Array);
echo $frase;

 
?>
</body>
</html> 
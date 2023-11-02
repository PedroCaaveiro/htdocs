<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
// funcion multiplicar retorna un valor entero
function multiplicar($valor1,$valor2){

return $valor1*$valor2;

}


?>

</head>
<body>
    <!----------titulo--->
    <h1>Ejercicio 2 para PHP:</h1><br>

    <?php
    //variables 
$numero1=3;
$numero2=5;
// creo variable y le asigno la funcion y le paso las variables
$resultado=multiplicar($numero1,$numero2);
// imprimo por web el resultado 

echo("El resultado de multiplicar $numero1 * $numero2 es = <strong>$resultado</strong>");

?>


</body>
</html>
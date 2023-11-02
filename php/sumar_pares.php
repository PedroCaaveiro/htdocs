

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Ejercicio 1 para PHP</h1>

<?php

$suma=0;
for ($i=10; $i <=100 ; $i++) { 
    if ($i%2==0) {
        
      $suma+=$i;
      
      
    }
    
}
echo("Sumar los numeros naturales del 10 al 100 y que se muestre el resultado de la suma. <br>");

?>

<p>La suma es: <strong style="color:black;"><?php echo $suma;?></strong></p>

</body>
</html>


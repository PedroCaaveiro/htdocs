<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Actividad 4 bucle for </h1>

<?php
/*
$i=0;
echo("do while" .'<br>' . '<br>');
do {
    echo("hola mundo" . '<br>' );
    $i++;
} while ($i<5);
echo('<br>');
echo("bucle for" . '<br>' . '<br>');
for ($i=0; $i <5 ; $i++) { 
    echo("hola mundo" . '<br>' . '<br>');
}

echo( " while" . '<br>' . '<br>');

$i=0;

while($i<5){
echo("hola mundo" . '<br>');
$i++;
}
*/

echo ("for each " . '<br>');
$array=array(1,2,3,4,5);

foreach ($array as $key => $value) {
    echo($value . '<br>');
}

unset($array[2]);
foreach ($array as $key => $value) {
    echo ($value . '<br>');
}


?>
</body>
</html>
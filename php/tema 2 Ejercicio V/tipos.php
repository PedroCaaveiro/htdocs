<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 2 Ejercicio V</title>
</head>

<body>
    <h1>Tema 2- Ejercicio V(casa)</h1>

    <?php
    $temporal = "Juan";
    echo "$temporal es de tipo: ";
    echo gettype($temporal);
    $temporal = 3.14;

    echo "<br><br> $temporal es de tipo ";
    echo gettype($temporal);

    $temporal = false;
    echo "<br><br> es de tipo ";
    echo gettype($temporal);
    $temporal=3;
    echo "<br><br>$temporal es de tipo ";
    echo gettype($temporal);
    $temporal=null;
    echo "<br><br> es de tipo ";
    echo gettype($temporal);




    ?>
</body>

</html>
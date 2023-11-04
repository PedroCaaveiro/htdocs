<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodo post</title>
</head>
<body>
<?php

$datos1 = $_POST["operando1"];
$datos2 = $_POST["operando2"];
$operador=$_POST["operadores"];
$resultado=0;
switch ($operador) {
    case '+':
        $resultado= $datos1 + $datos2;
        echo(" El resultado de $datos1 + $datos2  es: $resultado");
        
        break;
        case '-':
            $resultado= $datos1 - $datos2;
            echo(" El resultado de $datos1 - $datos2  es: $resultado");
            break;
            case '*':
                $resultado= $datos1 * $datos2;
                echo(" El resultado de $datos1 * $datos2  es: $resultado");
                break;
                case '/':
                   $resultado=$datos1/$datos2;
                    if ($datos2 !=0) {
                        echo(" El resultado de $datos1 / $datos2  es: $resultado");
                        
                    }else{
                        echo("No se puede divir por 0");
                    }
                    break;
                            
    default:
        echo "Operador no valido";
        break;
}


?>

</body>
</html>
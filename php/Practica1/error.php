



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="boton">
    <input type="button" value="VOLVER" onclick="history.back()">
    </div>
<?php

$error=$_GET['cod_error'];

switch ($error) {
    case '100':
       $imagen='100.png';
        break;
        case '200':
            $imagen='200.png';
            break;
            case '300':
                $imagen='300.png';
                break;
                case '400':
                    $imagen='Error400.png';
                    break;
                    case '500':
                        $imagen='error500.png';
                        break;
                            
    default:
        
        break;
}

echo '<img src="' . $imagen . '" alt="Descripción de la imagen">';
?>
</body>
</html>
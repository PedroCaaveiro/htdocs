<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS</title>
    <link rel="stylesheet" href="style2.css">

    <!-----------FUNCION VALIDAR FECHA -->
    <?php

 // VALIDAR  SI LA FECHA DE NACIMIENTO ES CORRECTA

 function validarfecha($fecha){
    //https://desarrolloweb.com/articulos/validar-fecha-php-formato-existencia.html
    //https://www.php.net/manual/es/function.checkdate.php

    $valoresFecha=explode('-',$fecha);
    if (count($valoresFecha) == 3 && checkdate($valoresFecha[1],$valoresFecha[2],$valoresFecha[0])) {
       return true;
    }
    
     return false;
}

// OCULTAR LA CONTRASEÑA
function ocultaContrasenya($contrasenya){
    $longitud=strlen($contrasenya);
    $contrasenyaOculta=str_repeat('*',$longitud);
    return $contrasenyaOculta;
    
    }
?>
</head>


<body">

    <?php
    
    // VARIABLES DONDE EL METODO POST GUARDA LOS DATOS DEL FORMULARIO
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fecha=$_POST['fecha'];
    $email=$_POST['email'];
    $usuario=$_POST['usuario'];
    // USUARIO CAPTURADO CON EL METODO STRTLOWER PARA QUE SALGA EN MINUSCULAS https://www.php.net/manual/es/function.strtolower.php
    $usuario=strtolower($usuario);
    // SE ELIMINA LOS ESPACIOS EN BLANCO AL PRINCIPIO Y AL FINAL https://www.php.net/manual/es/function.trim.php
    $usuario=trim($usuario);
    $contrasenya=$_POST['contrasenya'];
    $confirmarContrasenya=$_POST['confirmar_contrasenya'];
    // TERMINOS ACEPTADOS  https://www.php.net/manual/es/function.isset
    $terminos=isset($_POST['terminos']);


      // VALIDAR LOS TERMINOS 
      if ($terminos) {
        
    } else {
        header("Location: error.php?cod_error=100");
        exit();
    }

        // VALIDAR LA FECHA CON LA FUNCION VALIDARFECHA
    if (validarfecha($fecha)==true) {
       
    } else {
        header("Location: error.php?cod_error=200");
        exit();
    }

    // VALIDAR CONTRASEÑA Y CONFIRMACION

    if ($contrasenya===$confirmarContrasenya) {
        
    } else {
        header("Location: error.php?cod_error=300");
        exit();
    }

    // VALIDAR SI SE HA INTRODUCIDO UNA CONTRASEÑA 

    if (!empty($contrasenya) && !empty($confirmarContrasenya)) {
       
    } else {
        header("Location: error.php?cod_error=500");
    }
    
    
  

    // VALIDAR EL CORREO ELECTRONICO  https://www.php.net/manual/es/filter.examples.validation.php

    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
        
    } else {
        header("Location:error.php?cod_error=400");
        exit();
    }
    ?>

    <div class="contenedor" >


    <h1>DATOS REGISTRADOS</h1>
    
   
    <?php
// OCULTAR LA CONTRASEÑA CON LA FUNCION 
$oculta =ocultaContrasenya($contrasenya);

    // SI LOS DATOS HAN SIDO VALIDADOS CORRECTAMENTE
   echo("<p><br>Nombre:$nombre.<br>Apellido: $apellido.<br>Fecha de nacimiento: $fecha.<br>Email: $email.<br>Usuario: $usuario<br>Contraseña:$oculta</p>");
   
?>
<div class="imagen"></div>
<div class="elementos-flex">
    <a href="index.html" class="regresar">Volver a inicio</a>
</div>
</body>
</html>
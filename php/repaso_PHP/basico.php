<?php
// comentario de una linea 
/*
*
*
* comentario multilinea 
*
*/

$var= ""; //  null
$var=5;
echo ("el valor de la variable vale $var <br>");// comilla doble usar $var
echo ('el valor de la variable vale $var <br>');// comilla simple literal

// constante 

define("numm",42);
 echo("el valor de la variable es:" . numm);

 // numeros

 $a=3;
 $b=3.14;

 // operadores 

 // aritmeticos 
 // +,-,*,/,%
$c=$a+$b;
 echo (" la suma de es:" . $c);

// comparacion
// ==, !=,<,<=,>,>=
$c=$a>$b;
echo($c ."<br>");

// operadores logicos 
// &&, ||, !

$c=!($a > $b);
echo($c );
// incremento y decremento
$var=20;
$var++;
echo "<br>". $var;

$var--;
echo "<br>" . $var;

// dar formato a un numero

// round()

echo"<br>" . round(4.30);
echo "<br>". round(4.291832,2);

// number_format()

echo "<br>". number_format(428.4959,2);
echo"<br>" . number_format(1001.677,2);

// numero aleatorios

$aleatorio = rand(100,250);
echo"<br>" . $aleatorio;
$aleatorio1 = rand(2,10)/10;
echo"<br>" . $aleatorio1;

// cadenas 

echo "<br> hola ", " mundo";
echo "<br> hola ". " mundo";
$cad="Hola";
$cad2=" Mundo";

echo "<br>" . $cad . $cad2;

// funciones de cadenas php

// strtok

$cadena = " Pedro vera";
$nombre= strtok($cadena," ");
echo "<br>" . $nombre;
$apellidos= strtok(" ");
echo "<br>" . $apellidos;


// substr

$oracion="Porque no te callas";
$frase=substr($oracion,0,4);
echo "<br>" . $frase;

$frase2=substr($oracion,-4,3);
echo "<br>" . $frase2;

// strlen()

echo "<br>" . strlen($oracion);

// str_word_count(
echo "<br>" . str_word_count($oracion);

// strcmp()
$var1="Pepe";
$var2="pepe";
echo "<br>" . strcmp($var1,$var2); 


// strcasemp()
$var1="Pepe";
$var2="Pepe";
echo "<br>" . strcmp($var1,$var2); 


// strstr()

$oracion="egipto  es un caos. Dijo el periodista";
$aguja="D";
$resultado=strstr($oracion,$aguja);

// $resultado= substrt($resultado,1)  quita el punto 
echo "<br>" . $resultado;

$resultado = strpos($oracion,$aguja);
echo "<br>" . $resultado;

// formato de cadena 

$oracion="egipto  es un caos. Dijo el periodista";
// primera letra de la 1 palabra 
echo "<br>" . ucfirst($oracion);
// primera letra de todas las palabras 
echo "<br>" . ucwords($oracion);
// mayuscula
echo "<br>" . strtoupper($oracion);
// minuscula
echo "<br>" . strtolower($oracion);

// arrays y matrices 












?>
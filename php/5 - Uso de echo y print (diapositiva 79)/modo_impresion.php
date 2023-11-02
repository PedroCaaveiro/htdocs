<html>
	<head>
		<title>Imprimir por pantalla</title>
	</head>
	<body>
		<h1>Imprimir por pantalla: <br/></h1>
		<?php
			echo "Ejemplo de impresión de cadena de caracteres con echo.<br>";
			print "Ejemplo de impresión de cadena de caracteres con print.<br>";
			
			// Con <br> hacemos un salto de línea en PHP
		?>
		<?php
			$cadena = "Hola";
			echo $cadena, "<br>";
			// con la , concatenamos
			print $cadena;
		?>
	</body>
</html>

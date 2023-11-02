<html>
	<head>
		<title>Mostrar contenido variable</title>
	</head>
	<body>
		<h1>Mostrar contenido variable: <br/></h1>
		<?php
			$cadena = "Hola";
			echo $cadena, "<br>";
			// con la , concatenamos
			print $cadena;
		?>
		<p></p>
		<?=
			$cadena;
		?>
	</body>
</html>

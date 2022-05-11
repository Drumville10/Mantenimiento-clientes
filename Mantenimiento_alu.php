<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<header><h1>Nido "Gustavo Gruñon"</h1></header>
	<nav>
		<ul>
			<a href=""><li>Listar Alumnos</li></a>
			<a href=""><li>Agregar Alumnos</li></a>
			<a href=""><li>Buscar Alumnos</li></a>
		</ul>
	</nav>
	<!-- inicio de ejemplo de formulario usando get, esto ayuda a comprender el funcionamiento de get-->
	<!--
	<form action="formget.php" method="get">
		Nombre: <input type="text" name="nombre">
		Email: <input type="text" name="email">
		<input type="submit" value="enviar">
	</form>
	Hola <?php isset($_GET["nombre"]) ? print $_GET["nombre"]:""; ?><br>
	Tu email es: <?php isset($_GET["email"]) ? print $_GET["email"]:""; ?>
	-->
	<!--fin de ejemplo-->
	<section>
		<?php
		$opc=$_GET['opc'];
		switch($opc){
			case "agregar":include("");break;
			case "buscar": include("");break;
			case "eliminar": include("");break;
			case "editar": include("");break;
			default: include("");break;
		}
		?>
</body>
</html>
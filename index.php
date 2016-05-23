<?php
include("includes/conexion.php");
if(isset($_GET["pagina"])){
	$pagina=$_GET["pagina"];
}else{
	$pagina="listado.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos a mi web</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	
	<section id="contenedor">
		<header><?php include("includes/encabezado.php");?></header>
		<nav><?php include("includes/menusup.php");?></nav>
		<section><?php include($pagina);?></section>
		<footer><?php include("includes/pie.php");?></footer>
	</section>

</body>
</html>
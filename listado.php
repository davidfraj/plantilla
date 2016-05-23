<h2>Listado de elementos de la web</h2>

<?php

$sql="SELECT * FROM productos";
//Ahora $consulta, es un OBJETO de tipo mysqli_result
$consulta=$conexion->query($sql); 

while($fila=$consulta->fetch_array()){
	//Cada vez que paso por el bucle, 
	//Extraigo una fila
	$pro=new Producto($fila);

	echo $pro->dime_nombre();
	echo $pro->dime_precio();
	echo $pro->dime_imagen();
	echo $pro->dime_descripcion();

	echo '<hr>';
}

?>
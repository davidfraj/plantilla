<?php
//Conexion a la base de datos
$host="localhost";
$user="root";
$clave="";
$base="plantilla";

//NO uso objetos, asi que conexion es una variable
// $conexion=mysqli_connect($host,$user,$clave,$base);
//Usando la clase mysqli
$conexion=new mysqli($host,$user,$clave,$base);
$conexion->set_charset('utf8');



?>
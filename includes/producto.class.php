<?php
class producto{
	public $codigo;
	public $nombre;
	public $precio;
	public $imagen;
	public $descripcion;

	public function __construct($fila){
		//Relleno los datos desde mi registro $fila
		//$fila es un registro de la base de datos
		$this->codigo=$fila["codigo"];
		$this->nombre=$fila["nombre"];
		$this->precio=$fila["precio"];
		$this->imagen=$fila["imagen"];
		$this->descripcion=$fila["descripcion"];
	}

	public function dime_nombre(){
		return '<strong>'.$this->nombre.'</strong>';
	}

	public function dime_precio(){
		return '<i>'.$this->precio.' Euros</i>';
	}

	public function dime_imagen(){
		return '<img src="img/'.$this->imagen.'">';
	}

	public function dime_descripcion(){
		return '<article>'.$this->descripcion.'</article>';
	}

	public function dime_codigo(){
		return $this->codigo;
	}

}

?>
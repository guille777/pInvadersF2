<?php
/**
 * Nave espacial que se mueve de Guillermo
 * Parte2
 */
class ia{
	public $col;
	public $fil;

//se introduce la funcion randomPos, genera un orden random=aleatorio para los getters y setters.
	public function randomPos(){
		$this->columna=rand(0,3);                                             
		$this->fila=rand(0,3);
}
//metodo o funcion get:
	public function getColumna(){
		return $this->columna;
	}
	public function getFila(){
		return $this->fila;
	}
//funcion o metodo set:
	public function setColumna($col){
		$this->columna=$col;
	}
	public function setFila($fil){
		$this->fila=$fil;
	}
}
?>

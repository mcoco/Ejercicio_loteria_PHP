<?php
class Loteria{
	//atributos
	public $numero;
	public $intentos;
	public $resultado = false;

	//métodos

	public function __construct($numero, $intentos){
		$this->numero = $numero;
		$this->intentos = $intentos;
	}

	public function sortear(){
		//hacemos el sorteo. Generamos con una función interna de php run un número
		//random.
		//llamo al nº que ingresó el usuario y divido entre dos:
		$minimo = $this->numero /2;
		//llamo al nº que ingresó el usuario y multiplico por dos:
		$maximo = $this->numero * 2;
		
		//creo un ciclo for
		for($i=0;$i<$this->intentos; $i++){
			//creo la variable intento, que va a tener la función interna de php rand, que recibe el mínimo y el maximo
			$int =  rand($minimo, $maximo);
			$this->intentos($int);
		}
	}

	public function intentos($int){
		if($int==$this->numero){
			//has acertado el número
			echo "<b>" . $int . "= " . $this->numero . "<b> <br>";
			$this->resultado= true; 
		}
		else{
			//no acertado
			echo $int ."!=". $this->numero;
		}
	}

	public function __destruct(){
		if($this->resultado){
			echo "Has acertado, felicidades!!"
		}
		else{
			echo "no has acertado"
		}
	}
}
//El método constructor me pide dos parámetros, por lo que debo ponerlos aquí, sino
// me da error. Cuando instanciemos la clase, debemos colocarle los parámetros
//que está exigiendo el constructor
$loteria = new Loteria(10,5);
$loteria->sortear();


?>
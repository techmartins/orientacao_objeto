<?php

//Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que multiplique as 3 retornando o produto. Deixe um exemplo de utilização da sua classe no final do código.

class Carro {
	public $nome;
  	private $modelo;
  	protected $tipo;
  
	public function getNome() {
		return $this->nome;
	}

	public function setNome($name) {
		$this->nome= $name;
	}

	public function setModelo(){
		return $this->modelo;
	}

	public function getModelo($model){
		$this->modelo= $model;
	}

	public function setTipo(){
		return $this->tipo;
	}

	public function getTipo($type){
		$this->tipo= $type;
	}
}

$car = new Carro;
$car->setNome("Uno");
echo "O carro {$car->getNome()} é muito aconchegante.";

?>
<?php
//classe abstrata

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}
//Uma classe que não pode ser implementada, ela serve como classe Pai, sendo ela servindo apenas como referencia 
abstract class Automovel implements Veiculo{ 
  public function acelerar($velocidade)
  {
        echo "o veiculo acelerou até $velocidade km/h";  
  }
  

	public function freiar($velocidade) {
        echo "O veiculo frenou até $velocidade km/h";
	}
	
	public function trocarMarcha($marcha) {
        echo "O veiculo engatou a marcha $marcha";
	}
}


class Delrey extends Automovel {
    public function empurrar(){

    }

}
$carro = new Delrey;
$carro->acelerar(200);

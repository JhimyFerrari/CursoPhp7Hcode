<?php
class Documento {
    private $numero;
    

	public function getNumero() {
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
		
	}

}

class CPF extends Documento 
{
    public function validar():bool {
        $numeroCPF = $this->getNumero();

        return true;
    }
    
}

$doc = new CPF();
$doc->setNumero(111111141);

var_dump($doc->validar());



?>
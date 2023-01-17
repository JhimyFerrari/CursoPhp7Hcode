<?php
//Metodos mágicos
//metodos que agem sem que seja perceptivel, não é visto o que eles fazem

//Metodo construtor, é um metodo normal, mas é executado automaticamente quando o objeto é criado
//todoo metodo magico começa com __

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    
    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
     //   var_dump("Destruir");
    }

    public function __toString()
    {
        return $this->logradouro . "," . $this->numero . "," . $this->logradouro;
    }
}


$meuEndereco = new Endereco("Rua Ademar Saraiva Leao", "161", "Sao Paulo");

echo($meuEndereco->__toString());

//unset($meuEndereco);
?>
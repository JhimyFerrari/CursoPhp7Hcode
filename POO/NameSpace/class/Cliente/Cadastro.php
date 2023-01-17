<?php
namespace Cliente; //Nome da pasta em que o arquivo está inserido
//cadastro específico para Cliente
class Cadastro extends \Cadastro{

    public function registrarVenda(){
        echo "foi feita uma venda para o cliente". $this->getNome();
    }
}

?>
<?php
//Classe  --> o que importa é o que está dentro
// {atributos e métodos} 
// Objeto é uma variavel que representa uma classe --> instancia 

//criação de uma classe
class Pessoa {
    public $nome; //atributo publico

    public function falar(){  //método publico
                                //atributo dentro de um método  $this-> nomeVariavelSem$
        return "O meu nome é ". $this->nome; //$this representa a classe já instanciada
    }

} 

$glaucio = new Pessoa(); //Criação de um novo objeto da classe Pessoa
$glaucio -> nome = "Glaucio Daniel"; //atribui o $nome do objeto ---- sem $
echo $glaucio-> falar(); //uso do metodo no objeto $glaucio


//molde classe 
//class nomeClasse herda ClassePai implementa Interface
//  class ClassName extends AnotherClass implements Interface
{
    
}

?>
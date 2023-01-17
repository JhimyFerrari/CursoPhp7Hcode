<?php
//encapsulamento

//é uma forma de controlar quem pode e quem nao pode acessar um atributo ou metodo. 
/*Quando bem utilizado ele ajuda não só a proteger as informações mas de uma certa forma organizar quem
vai acessar e a forma como isso deve ocorrer.
*/

class Pessoa { //classe pai
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48; //herdeiros conseguem acessar
    private $senha = "123456789"; //mais protegido que o protected, nem os herdeiros conseguem acessar


    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}
//a classe programador extend tudo da classe Pessoa, menos o que for privado
class Programador extends Pessoa { //classe filha, herança
    public function verDados(){
        //essa função diz que classe que foi feita a instancia do objeto
        echo get_class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Programador();

//echo $objeto->nome . "<br>";

$objeto->verDados();

?>
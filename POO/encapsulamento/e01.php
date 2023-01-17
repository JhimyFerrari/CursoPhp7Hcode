<?php
//encapsulamento

//é uma forma de controlar quem pode e quem nao pode acessar um atributo ou metodo. 
/*Quando bem utilizado ele ajuda não só a proteger as informações mas de uma certa forma organizar quem
vai acessar e a forma como isso deve ocorrer.
*/

class Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48; //herdeiros conseguem acessar
    private $senha = "123456789"; //mais protegido que o protected, nem os herdeiros conseguem acessar


    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();

//echo $objeto->nome . "<br>";

$objeto->verDados();

?>
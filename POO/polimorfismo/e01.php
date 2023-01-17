<?php
//polimorfismo
//Quando um metodo que existe em classes diferentes, tem comportamentos diferentes
abstract class Animal {
    public function falar(){
        return "som";

    }
    public function mover(){
        return "anda";
    }
}


class Cachorro extends Animal{
    public function falar(){ //ocorre um polimorfismo no falar
        return "late";
    }

}
class Gato extends Animal{
    public function falar(){
        return "mia";
    }
}


class Passaro extends Animal{
    public function falar(){
        return "canta";
    }
    public function mover(){
    //  return "Voa e " concatena com o mover da classe Pai
    //para chamar da classe Pai usa-se   parente::
        return "Voa e " . parent::mover();
    }
}



$pluto = new Cachorro();
echo $pluto->falar();
echo "<br>";
echo $pluto->mover();

echo "<br>";
echo "<br>";

$garfield = new Gato();
echo $garfield->falar();
echo "<br>";
echo $garfield->mover();


echo "<br>";
echo "<br>";

$ave = new Passaro();
echo $ave->falar();
echo "<br>";
echo $ave->mover();
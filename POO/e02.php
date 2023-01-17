<?php

class Carro {

    private $modelo;            //atributo privado
    private $ano;
    private $motor;

    public function getModelo(){ //método para exibição de um atributo privado
        return $this ->modelo;   
    }

    public function setModelo($modelo){  //método para alteração de um atributo privado
        //$this->modelo é do objeto, $modelo vem do metodo
        $this ->modelo =$modelo;

    }
    public function getMotor():float{ //esse :float   diz que vai retornar um float
        return $this -> motor;
    }
    public function setMotor($motor){
        $this ->motor = $motor;
    }

    public function getAno():int{ //esse :int   diz que vai retornar um int
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano=$ano;
    }


    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol =new Carro();
$gol ->setModelo("Gol GT");
$gol ->setMotor("1.8");
$gol ->setAno("2020");


echo $gol ->getModelo();

echo "<br>";

var_dump($gol->exibir());
?>
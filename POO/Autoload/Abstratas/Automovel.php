<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}
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
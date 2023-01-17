<?php
//Parametros de função
//são as informações que ela vai receber para trabalhar corretamente

function ola($texto, $periodo ="bom dia"){ // valores obrigatório devem sempre ficar na esquerda, ///valores que tem o = não são obrigatórios, pois já tem um valor padrão
    return "Olá $texto! $periodo <br>";

}
echo ola("mundo");//informando apenas o obrigatório
echo ola("","boa tarde"); //informando o primeiro como vazio e informando o segundo
echo ola ("mundo","boa tarde");//informando o primeiro e o segundo
echo ola("Joao");//informando apenas o primeiro(obrigatório)

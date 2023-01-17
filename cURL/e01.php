<?php
//cURL é uma ferramenta de linha de comando que pode utilizar para transferir dados através de protocolos de rede. O nome cURL significa 'client URL', e também é escrito como 'curl'. Este popular comando utiliza a sintaxe URL para transferir dados de e para os servidores
//São restApi
//permite acessar bibliotecas

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

//inicia o cURL
$ch = curl_init($link);

#curl_setopt(ch-->biblioteca,option-->como vai se comportar, boolean se espera resposta)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //define o return de transferencia
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//validação 

$response = curl_exec($ch); //executa a curl

curl_close($ch);//fecha a conexão

$data = json_decode($response, true);

print_r($data);

echo "<br>";

print_r($data["localidade"]);


?>
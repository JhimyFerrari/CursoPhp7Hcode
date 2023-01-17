<?php
require_once("config.php");

$sql = new Sql();

$usuarios =$sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");




//Arquivo csv ---> arquivo formato, em colunas
//Os arquivos Comma-separated values, também conhecido como CSV, são arquivos de texto de formato regulamentado pelo RFC 4180, que faz uma ordenação de bytes ou um formato de terminador de linha, separando valores com vírgulas


//criação do cabeçalho
$headers = array();

//para cada coluna 0 como chave
foreach ($usuarios[0] as $key => $value) {

    //adicione ao $header, com as primeiras letras maisculas o valor $key
    array_push($headers, ucfirst($key));
    # code...
}

$file = fopen("usuarios.csv", "w+");

//implode ("separador", array) --->transforma array em string
//     \r\n quebra e vai pra proxima linha
fwrite($file, implode(",", $headers)."\r\n");

//for each nas linhas
foreach ($usuarios as $row) {
    $data = array();

    //for each nos campos
    foreach ($row as $key => $value) {
        array_push($data,$value);
    }

    fwrite($file, implode(",", $data) ."\r\n");
}

fclose($file);


?>
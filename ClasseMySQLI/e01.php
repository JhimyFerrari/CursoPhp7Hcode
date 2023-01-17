<?php
//$conn = new mysqli (endereço, usuario, senha, nomeBancoDeDados)
$conn = new mysqli("localhost","root","","dbphp7" ); //fazer a conexão com o banco de dados


if ($conn->connect_error) { //se der erro na conexão
    echo "Error: " . $conn->connect_error; //exiba o erro
}

//preparar uma variavel para inserir dados no banco
//$statement = $conn
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?) ");

//bindParam(). Para realizar a definição do valor de um parâmetro, esse método recebe como argumento  uma referência, ou seja, uma variável ou uma constante. Isso significa que se informarmos um valor de maneira direta para ele, não irá funcionar.
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";


$stmt->execute();//executa o método

$login = "root";
$pass = "!23$&";

$stmt->execute();

?>
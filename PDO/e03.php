<?php
//adicionando ao banco

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "José";
$password = "123456789";

//BindParam junta o parametro ao valor     liga eles
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);


$stmt->execute();

echo "Inserido";

?>
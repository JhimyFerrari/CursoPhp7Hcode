<?php
//alterando dados

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE id = :ID");

$login = "Joao";
$password = "qwert";
$id = 2;
//BindParam junta o parametro ao valor     liga eles
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "alterado";

?>


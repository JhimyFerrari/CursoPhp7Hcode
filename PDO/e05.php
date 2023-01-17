<?php
//excluindo dados

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :ID");

$id = 6;
//BindParam junta o parametro ao valor     liga eles
$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "excluido";

?>
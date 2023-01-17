<?php

//Transações

//Controle de confirmação

//Caso confirma, prossiga, caso não cancela tudo

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//inicia a transação
$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = ?");

$id = 2;
//BindParam junta o parametro ao valor     liga eles

$stmt->execute(array($id));

/*cancela a operação, logo, não exclui

$conn->rollBack(); 

*/


//dá prosseguimento a operação  confirmando ela
$conn->commit();



echo "excluido";

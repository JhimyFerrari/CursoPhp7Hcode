<?php
//$conn = new mysqli (endereço, usuario, senha, nomeBancoDeDados)
$conn = new mysqli("localhost","root","","dbphp7" ); //fazer a conexão com o banco de dados


if ($conn->connect_error) { //se der erro na conexão
    echo "Error: " . $conn->connect_error; //exiba o erro
}
//$resultado =$conexão->query(select da tb_usuarios por ordem de deslogin)
$result =$conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//fetch_array  metodo para retornar dados, caso ele existir    por array
//fetch_assoc faz a mesma coisa, porem por associassão
while ($row= $result->fetch_assoc()) { //enquanto existir, armazena em $row

    array_push($data, $row);//adiciona no array $data, o $row
  
    
}

echo json_encode($data);
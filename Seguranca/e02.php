<?php
//SQL injection
//injeta comandos junto com informações que iriam para o banco
//Para evitar melhor, é altamente remomendado usar PDO, com BIND PARAMS





//Com problemas de segurança
$id=(isset($_GET["id"]))?$_GET["id"]:1;

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE id=$id";

$exec = mysqli_query($conn, $sql);

while($resultado=mysqli_fetch_assoc($exec)){
    print_r($resultado) ;
}
// ?id=1 OR 1=1 -- 
//Apenas essa pequena linha, trouxe toda a tabela, ignorando o WHERE



#$id=(isset($_GET["id"]))?$_GET["id"]:1;
#if (!is_numeric($id) || strlen($id) > 5) {
 #   exit("Código bloqueado");
    
#}

#$conn = mysqli_connect("localhost", "root", "", "dbphp7");

#$sql = "SELECT * FROM tb_usuarios WHERE id=$id";

#$exec = mysqli_query($conn, $sql);

#while($resultado=mysqli_fetch_assoc($exec)){
 #   print_r($resultado) ;
#}

?>
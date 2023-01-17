
<?php
//PHP Data Object

//conectando com o banco de dados
//$conn = new PDO("tipoDeBanco : dbname = NomeBD ; host=localOuIP", "usuario", "senha");
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;","jhimy", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);//fatia inteiro

foreach($results as $row){
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
        
    }
    echo "=====================<br>";
}


?>
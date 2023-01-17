<?php
//XSS
//cross site scripting
//se assemelha ao command injection
//injeta codigo html
//permanente ou momentaneo

?>
<form action="" method="post">
    <input type="text" name="busca" id="">
    <button type="submit">Enviar</button>
</form>
<?php
if (isset($_POST["busca"])) {
    //strip_tags --->remove todas as tags, porem depois da variavel é declarado as exceções
    echo strip_tags($_POST["busca"],"<strong>");

    //htmlentities transforma as tags em texto
    echo htmlentities($_POST["busca"]);
}


?>
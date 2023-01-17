<?php
//tag pre do HTML



//evitar usar comandos cmd dinamicos, para assim não dar porta para o command injection
//caso não aja como evitar, usar o escapeshellcmd
if($_SERVER["REQUEST_METHOD"]=== 'POST'){

        //escape shell cmd
        //tudo aquilo que for entendido como comando, vai ser anulado e transformado em String
    $cmd =escapeshellcmd($_POST["cmd"]) ;
    var_dump($cmd);
echo "<pre>";

//comando com system exibe a função
$comando = system($cmd, $retorno);

echo "</pre>";

}

?>
<form method="post">
    <input type="text" name="cmd" id="">
    <button type="submit">enviar</button>
</form>
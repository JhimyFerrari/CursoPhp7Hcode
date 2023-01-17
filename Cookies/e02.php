<?php
//recupera os cookies que estão na maquina da pessoa
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
   $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa;

}

?>
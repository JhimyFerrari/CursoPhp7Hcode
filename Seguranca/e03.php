<?php
//permissoes de pasta
//leitura, gravação e execução
// 0 a 7
//mais comuns 5 e 7
//0 nada  5 leitura e gravação    7 tudo

//CGG
//Creator, Groups, Guests
//755

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta))mkdir($pasta,$permissao);



?>
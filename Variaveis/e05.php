<?php
//escopo de variavel

$nome = "Gerson"; //variavel fora dos escopos

function teste() {  //função --- um escopo ----uma casa
    global $nome; //chama a variavel de fora do escopo
    echo $nome;
}

function teste2(){ // outra função ---- outro escopo ---- outra casa

    $nome = "Joao"; //variavel nome dentro do escopo da função teste 2
   
    echo $nome . " agora no teste dois";
}

teste();
teste2();

// $nome global != $nome teste2

//variaveis superglobais funcionam dentro de qualquer escopo sem necessidade de ligações
?>
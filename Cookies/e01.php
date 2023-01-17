<?php
//Cookies são arquivos criados pelos sites que você visita. Eles tornam sua experiência on-line mais fácil, economizando informações de navegação. Com os cookies, os sites podem manter seu login, lembrar suas preferências do site e fornecer conteúdo relevante localmente.

//São arquivos de texto com informações do usuario


$data = array(
    "empresa"=>"Hcode Treinamentos"
);



//define o cookie
#setcookie(nomeCookie, dados, tempo)
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";


?>
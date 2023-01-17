<?php

setlocale(LC_ALL,"pt_BR", "pt_BR.utf-8", "portuguese"); //Passar o idioma, LC_ALL é uma constante do PHP que muda toda a configuração
//é passado de varias formas o idioma para se adaptar em diversar plataformas, como Windows, padrão utf8 e Linux

echo ucwords (strftime("%A, %B")); //strftime mostra a data com base no idioma da localização
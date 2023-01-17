<?php
 /*for ($i = 0; $i <10; $i++){
    echo $i . "<br>";
}*/


for ($i = 0; $i <1000; $i+=5){
    if ($i >=200 && $i <=800)continue; //pula aquela passada do for e vai pra proxima
    if ($i === 900) break; //brequa o for
    echo $i . "<br>";
}

?>
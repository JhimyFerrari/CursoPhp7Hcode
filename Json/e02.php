<?php

$json = '
[{"nome":"Joao","idade":20},{"nome":"Marcio","idade":25}]';

$data = json_decode($json, true); //json_decode, json para array

var_dump($data);

?>
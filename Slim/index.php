<?php
require_once("vendor/autoload.php");
//Um Micro-Framework são Frameworks modularizados que possuem uma estrutura inicial muito mais simples quando comparado a um Framework convencional.

//É um Micro-Framework bastante leve e prático, e como dito anteriormente, possui como principal característica a implementação RESTful, facilitando a vida do desenvolvedor na criação de APIs de pequeno ou médio porte de maneira organizada.
$app = new \Slim\Slim();

$app->get('/', function () {
    echo json_encode(array(
        'date'=>date("d/m/Y")
    ));
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

?>
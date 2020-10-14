<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Hello Worldddddddddddddddddddddddddddddddddddddddddddd!";
    $data->Output = "Hell0000000000000o Worldddddddddddddsddsgdsgdsgdsgdsddddddddddddddddddddddddddddddd!";
    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();

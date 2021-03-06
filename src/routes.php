<?php

use Slim\Http\Request;
use Slim\Http\Response;


$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml');
});

$app->get('/secret', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'secret.phtml');
});
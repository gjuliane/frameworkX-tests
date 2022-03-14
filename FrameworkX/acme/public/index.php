<?php

use Acme\Todo\{HelloController, UserController};

require __DIR__ . '/../vendor/autoload.php';

$app = new FrameworkX\App();

$app->get('/', HelloController::class);
$app->get('/todo/hello', HelloController::class);

$app->get('/user/{id}', function (Psr\Http\Message\ServerRequestInterface $request) {
    $id = $request->getAttribute('id');
    return React\Http\Message\Response::plaintext("Hello $id!\n");
});

$app->get('/users/{name}', UserController::class);


$app->run();
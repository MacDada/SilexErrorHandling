<?php

require_once __DIR__.'/../vendor/autoload.php';

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$app = new Silex\Application();

$app->get('/', function () {
    return 'Hello World!';
});

$app->run($request);

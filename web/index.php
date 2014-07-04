<?php

require_once __DIR__.'/../vendor/autoload.php';

class SomeClassWithError
{
    public function runMethodWithError()
    {
        $this->nonExistingMethod();
    }
}

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$debug = 'true' === $request->query->get('debug');

$app = new Silex\Application(['debug' => $debug]);

$app->get('/', function (Silex\Application $app) {
    return sprintf('Hello World! (debug %s)', $app['debug'] ? 'ON' : 'OFF');
});

$app->get('/error', function () {
    $object = new SomeClassWithError();
    $object->runMethodWithError();

    return 'Should not get to that…';
});

$app->run($request);

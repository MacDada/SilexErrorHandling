<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

class SomeClassWithError
{
    public function runMethodWithError()
    {
        $this->nonExistingMethod();
    }
}

$request = Request::createFromGlobals();

$debug = $request->query->getInt('debug');

switch ($debug) {
    case 0:
        /**
         * no debug
         * (blank page on error)
         */
        break;
    case 1:
        /**
         * As in official Silex skeleton:
         * https://github.com/silexphp/Silex-Skeleton/blob/master/web/index_dev.php
         * (blank page on error)
         */
        Symfony\Component\Debug\Debug::enable();
        break;
    case 2:
        /**
         * As in official Silex docs:
         * http://silex.sensiolabs.org/doc/cookbook/error_handler.html#registering-the-errorhandler
         * (blank page on error)
         */
        Symfony\Component\Debug\ErrorHandler::register();
        break;
    case 3:
        /**
         * As in official Silex docs:
         * http://silex.sensiolabs.org/doc/cookbook/error_handler.html#handling-fatal-errors
         * (blank page on error)
         */
        Symfony\Component\Debug\ExceptionHandler::register();
        break;
    case 4:
        /**
         * Method 3 and 4 combined
         * (blank page on error)
         */
        Symfony\Component\Debug\ErrorHandler::register();
        Symfony\Component\Debug\ExceptionHandler::register();
        break;
    case 5:
        /**
         * Method 4 and 3 combined
         * (blank page on error)
         */
        Symfony\Component\Debug\ExceptionHandler::register();
        Symfony\Component\Debug\ErrorHandler::register();
        break;
    case 6:
        /**
         * Well, that escalated quickly… but it works!
         * (xdebug stacktrace shown, although standard silex error page would be nice)
         */
        ini_set('display_errors', 1);
        break;
    case 7:
        /**
         * Combine 6 and 1
         * (blank page on error)
         */
        ini_set('display_errors', 1);
        Symfony\Component\Debug\Debug::enable();
        break;
    default:
        die('invalid debug option');
}

$app = new Silex\Application(['debug' => (bool) $debug]);

$app->get('/', function () use ($app, $debug) {
    return sprintf('Hello World! (debug %s: %s)', $app['debug'] ? 'ON' : 'OFF', $debug);
});

$app->get('/exception', function () {
    throw new RuntimeException('Oh, yeah!');
});

$app->get('/error', function () {
    $object = new SomeClassWithError();
    $object->runMethodWithError();

    return 'Should not get to that…';
});

$app->run($request);

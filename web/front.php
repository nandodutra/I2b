<?php

//http://fabien.potencier.org/article/62/create-your-own-framework-on-top-of-the-symfony2-components-part-12

ini_set('display_errors', 1);
error_reporting(-1);
 
require_once __DIR__.'/../vendor/autoload.php';
 
use Symfony\Component\HttpFoundation\Request;
 
$request = Request::createFromGlobals();

$routes = include __DIR__.'/../src/app.php';
 
$framework = new I2b\Framework($routes);

//$dispatcher = $framework->getEventDispatcher();

//$dispatcher->addSubscriber(new I2b\StringResponseListener());
 
$framework->handle($request)->send();
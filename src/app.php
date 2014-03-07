<?php
 
// example.com/src/app.php
 
use Symfony\Component\Routing;

function is_leap_year($year = null) {
    if (null === $year) {
        $year = date('Y');
    }
 
    return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
}

 
$routes = new Routing\RouteCollection();


$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\\Controller\\LeapYearController::indexAction',
)));
 
return $routes;
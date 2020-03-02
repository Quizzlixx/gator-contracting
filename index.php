<?php

//this is our controller!

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

$routes = new Routes($f3);
//define a default route
$f3->route('GET /', function() {
    $GLOBALS['routes']->home();
});

$f3->route('GET /contractor', function () {
    $GLOBALS['routes']->contractor();
});


$f3->route('GET /client', function () {
    $GLOBALS['routes']->client();
});

$f3->route('GET /jobs', function () {
    $GLOBALS['routes']->jobs();
});

$f3->route('GET /login', function () {
    $GLOBALS['routes']->login();
});
//run fat free
$f3 -> run();
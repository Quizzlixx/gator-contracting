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

//run fat free
$f3 -> run();
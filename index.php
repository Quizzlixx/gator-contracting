<?php
/*
 * Kerrie Low
 * Cody Zipp
 * Gator Contracting
 * Full Stack Web Development
 * https://klow.greenriverdev.com/328/gator-contracting/
 */
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

// session start
session_start();

//create an instance of the base class
$f3 = Base::instance();

// f3 debugging ON
$f3->set('DEBUG', 3);

// Instantiate a new controller
$db = new GcDatabase();
$routes = new Routes($f3);

// states array
$f3->set('states', array('AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas',
    'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut', 'DE' => 'Delaware', 'DC' => 'District of Columbia',
    'FL' => 'Florida', 'GA' => 'Georgia', 'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois', 'IN' => 'Indiana',
    'IA' => 'Iowa', 'KS' => 'Kansas', 'KY' => 'Kentucky', 'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland',
    'MA' => 'Massachusetts', 'MI' => 'Michigan', 'MN' => 'Minnesota', 'MS' => 'Mississippi', 'MO' => 'Missouri',
    'MT' => 'Montana', 'NE' => 'Nebraska', 'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey',
    'NM' => 'New Mexico', 'NY' => 'New York', 'NC' => 'North Carolina', 'ND' => 'North Dakota', 'OH' => 'Ohio',
    'OK' => 'Oklahoma', 'OR' => 'Oregon', 'PA' => 'Pennsylvania', 'RI' => 'Rhode Island', 'SC' => 'South Carolina',
    'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah', 'VT' => 'Vermont', 'VA' => 'Virginia',
    'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin', 'WY' => 'Wyoming'));

//define a default route
$f3->route('GET /', function () {
    $GLOBALS['routes']->home();
});

$f3->route('GET /main', function () {
    $GLOBALS['routes']->main();
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

$f3->route('GET|POST /login', function ($f3) {
    $GLOBALS['routes']->login($f3);
});

$f3->route('GET|POST /client-register', function ($f3) {
    $GLOBALS['routes']->clientRegister($f3);
});

$f3->route('GET|POST /contractor-register', function ($f3) {
    $GLOBALS['routes']->contractorRegister($f3);
});
//run fat free
$f3->run();
<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/14/2019
 * Time: 10:10 AM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

session_start();

//Create an instance of the Base Class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function($f3){
    //save variables
    $f3->set('color', 'purple');
    $f3->set('radius', 10);
    $f3->set('links', array('https://en.wikipedia.org/wiki/Alondras_CF',
        'https://en.wikipedia.org/wiki/James_D._Pfluger_Pedestrian_and_Bicycle_Bridge',
        'https://en.wikipedia.org/wiki/Battor'));

    $template = new Template;
    echo $template->render('views/info.html');
});

//Run fat free
$f3->run();
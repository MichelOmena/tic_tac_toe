<?php 

//Start Session
session_start();

//define control variable 
define('CONTROL', true);

//define routes
$routes = $_GET['route'] ?? 'start';

$script = null;

switch ($route) {
    case 'start':
        $script = 'start.php';
        break;
    case 'game':
        $script = 'game.php';
    case 'end':
        $script = 'end.php';
    case 'game':
        $script = 'game.php';
        break;
    default:
    $script = '404.php';
    break;
}

//view
require "in/header.php";
require "inc/$script";
require "inc/footer.php";
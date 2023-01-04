<?php

require_once('src/autoload.php');
/**
 * On affiche la page d'accueil
 */

$class = 'Message';
$method = 'index';
if(isset($_GET['controller']) && isset($_GET['method'])){
    $class = $_GET['controller'];
    $method = $_GET['method'];
}

$class = '\Controllers\\' . $class . 'Controller';

$controller = new $class();
$controller->$method();


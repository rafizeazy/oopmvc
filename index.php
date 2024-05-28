<?php
// index.php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'anggota';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once 'controller/' . $controller . '.php';

$controller = ucfirst($controller) . 'Controller';
$controller = new $controller();

if (method_exists($controller, $action)) {
    if (isset($_GET['id'])) {
        $controller->{$action}($_GET['id']);
    } else {
        $controller->{$action}();
    }
} else {
    echo "Invalid action.";
}

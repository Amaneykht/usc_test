<?php
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
});

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'Drawing';
    $action = 'index';
}

function call($controller, $action)
{
    // require the file that matches the controller name
    require_once('controllers/' . $controller . 'Controller.php');

    // create a new instance of the needed controller
    $contoller_name = "\\controllers\\" . $controller . 'Controller';
    $controller = new $contoller_name();

    // call the action
    $controller->{"action" . $action}();
}


call($controller, $action);
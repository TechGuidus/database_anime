<?php
require_once "db.php";
require_once "tasks.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        showHome(); 
        break;
    case 'createTask': 
        createTask(); 
        break;
    case 'deleteTask': 
        deleteTask($params[1]); 
        break;
    case 'updateTask': 
        updateTask($params[1]); 
        break;
    case 'viewTask': 
        viewTask($params[1]); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}


?>
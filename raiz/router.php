<?php 
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    require_once('Controller/streamingController.php');
    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    }else {
        $action = "home";
    }
    $params = explode("/", $action);
    $controller = new StreamingController();
    switch ($params[0]) {
        case  'home':
            $controller->showHome();
            break;
        case  'insert-game':
            $controller->insertGame();
            break;
        case  'addBet':
            $controller->insertBet($params[1]);
            break;
        case  'delete':
            $controller->deleteGame($params[1]);
            break;
        default:
            break;
    }
?>
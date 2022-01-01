<?php


    if (file_exists("controllers/{$controller}.php")) {

        include_once("controllers/{$controller}.php");
        $objController = ucfirst($controller);
        $controller = new $objController();
        $controller->$action();
    }else {
        include_once("views/pages/error.php");
    }

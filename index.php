<?php

    if (!empty($_GET['controller']) && !empty($_GET['action'])) 
    {

        
        $controller = $_GET['controller'];
        $action = $_GET['action'];

    }else{
        $controller = 'homeController';
        $action = 'home';
    }
    include_once ("views/template.php");
    
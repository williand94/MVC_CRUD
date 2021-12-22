<?php

    if (!empty($_GET['controller']) && !empty($_GET['action'])) 
    {

        
        $controller = $_GET['controller'];
        $action = $_GET['action'];

        print_r($_GET);
    }else{
        $controller = 'home';
    }
    
    require_once ("views/template.php");
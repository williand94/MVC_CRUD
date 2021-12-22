<?php 


    class EmployesController{

        public function home()
        {
            include_once("views/employes/home.php");
        }

        public function create()
        {
            if ($_POST) {
                print_r($_POST);
            }
            include_once("views/employes/create.php");
        }

        public function update()
        {
            include_once("views/employes/update.php");
        }
        
    }
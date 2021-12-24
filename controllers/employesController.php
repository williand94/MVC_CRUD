<?php 
include_once("models/employedModel.php");
include_once("config/connection.php");

//DB::createConnection();

    class EmployesController{

        public function home()
        {

            $show = EmployedModel::_query();
            
            include_once("views/employes/home.php");
        }

        public function create()
        {
            if ($_POST) {
                echo "<pre>";
                print_r($_POST);
                echo"</pre>";

                $name = $_POST['name'];
                $email = $_POST['email'];
                EmployedModel::create($name,$email);
            }
            include_once("views/employes/create.php");
        }

        public function update()
        {
            include_once("views/employes/update.php");
        }
        
    }
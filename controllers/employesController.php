<?php 
include_once("models/employedModel.php");
include_once("config/connection.php");

//DB::createConnection();

    class EmployesController{

        public function home()
        {

            //$show = EmployedModel::_query();
            $employes = EmployedModel::query();
            
            include_once("views/employes/home.php");
        }

        public function create()
        {
            //print_r($_POST);
            if ($_POST) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $status = $_POST['status'];
                EmployedModel::create($name,$email,$status);
                header("Location: ./?controller=employesController&action=home");
            }
            include_once("views/employes/create.php");
        }

        public function update()
        {   
            
            if ($_POST) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $status = $_POST['status'];
                
                EmployedModel::update($id,$name,$email,$status);
                header("Location: ./?controller=employesController&action=home");

            }
            $id = $_GET['id'];
            $employed=EmployedModel::search($id);
            include_once("views/employes/update.php");
        }
        
        public function delete()
        {
            print_r($_GET);
            $id = $_GET['id'];
            EmployedModel::delete($id);
            header("Location: ./?controller=employesController&action=home");
        }
    }
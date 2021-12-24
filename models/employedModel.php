<?php

    class EmployedModel{

        public $id;
        public $name;   
        public $email;

        public function __construct($id,$name,$email)
        {
            $this->id    = $id;
            $this->name  = $name;
            $this->email = $email;
        }
     
        public static function query()
        {
            $employesList = [];
            $connectionDB = DB::createConnection();
            $sql = $connectionDB->query("SELECT * FROM employes ");

            foreach ($sql->fetchAll() as $employed) {
                $employesList[] = new EmployedModel($employed['id'],$employed['name'],$employed['email']);
            }

            return $employesList;

        }


        public static function _query()
        {
            $employed = [];
            $connectionDB = DB::createConnection();
            $sql = $connectionDB->query("SELECT * FROM employes ");
            while($file = $sql->fetchAll()) {

                $employed[] = $file;
            }
            
            return $employed;
        }


        public static function create($name, $email)
        {
            $connectionDB = DB::createConnection();

            $sql = $connectionDB->prepare("INSERT INTO employes(name,email) VALUES(?,?)");
            $sql->execute(array($name,$email));
            
        }
    }

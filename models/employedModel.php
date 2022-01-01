<?php

    class EmployedModel{

        public $id;
        public $name;   
        public $email;
        public $status;
        
        public function __construct($id,$name,$email,$status)
        {
            $this->id    = $id;
            $this->name  = $name;
            $this->email = $email;
            $this->status = $status;

        }
     
        public static function query()
        {
            $employesList = [];
            $connectionDB = DB::createConnection();
            $sql = $connectionDB->query("SELECT * FROM employes WHERE status = 1");
            foreach ($sql->fetchAll() as $employed) {
                $employesList[] = new EmployedModel($employed['id'],$employed['name'],$employed['email'],$employed['status']);
            }

            return $employesList;

        }

        //My code! =D 
        /* public static function _query()
        {
            $employed = [];
            $connectionDB = DB::createConnection();
            $sql = $connectionDB->query("SELECT * FROM employes ");
            while($file = $sql->fetchAll()) {

                $employed[] = $file;
            }
            
            return $employed;
        } */


        public static function create($name, $email,$status)
        {
            $connectionDB = DB::createConnection();
            $sql = $connectionDB->prepare("INSERT INTO employes(name,email,status) VALUES(?,?,?)");
            $sql->execute(array($name,$email,$status));
        }

        public static function delete($id)
        {
            $connectionDB = DB::createConnection();

            $sql = $connectionDB->prepare("UPDATE employes SET status = 0 WHERE id = ? ");
            $sql->execute(array($id));

        }

        public static function search($id)
        {
            $connectionDB = DB::createConnection();

            $sql = $connectionDB->prepare("SELECT * FROM employes WHERE id = ? ");
            $sql->execute(array($id));
            $employed= $sql->fetch();
            return new EmployedModel($employed['id'],$employed['name'],$employed['email'],$employed['status']);
        }

        public static function update($id,$name,$email,$status)
        {
            $connectionDB = DB::createConnection();
            $sql = $connectionDB->prepare("UPDATE employes SET name=?,email=?,status=? WHERE id=?");
            $sql->execute(array($name,$email,$status,$id));
        
        }
    }

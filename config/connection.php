<?php
require_once("config.php");
    class DB {
        private static $connect = NULL;

        public static function createConnection()
        {
            try {
 
                if(!isset(self::$connect))
                {
                    $pdoOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                    self::$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, "root","",$pdoOptions);                   
                    echo '<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading"></h4>
                      <p>"Conexión exitosa!"</p>
                      <hr>
                      <p class="mb-0"></p>
                    </div>';
                }
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            return self::$connect;
        }
    }

<?php

    namespace App\Model;
    use PDO;
    use PDOException;
    use App\Model\Session;

    class Database
    {
        private $host = "us-cdbr-east-03.cleardb.com";
        private $user = "b9521349c9c40f";
        private $pwd = "9d1b4ccb";
        private $db = "heroku_f88d617ecf8cb4c";

        protected $DBHandler;

        public function __construct()
        {
            $this->DBHandler = null;
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
            try{
                $this->DBHandler = new PDO($dsn,$this->user,$this->pwd);
                $this->DBHandler->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                $this->DBHandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("Database connection failed : ".$e->getMessage());
            }
        }
    }
    Session::start();
?> 
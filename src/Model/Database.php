<?php

    namespace App\Model;
    use PDO;
    use PDOException;
    use App\Model\Session;

    class Database
    {
        private $host = "us-cdbr-east-03.cleardb.com";
        private $user = "b5b858a188f13b";
        private $pwd = "5f50c98e";
        private $db = "heroku_9664a85a6c25d57";

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
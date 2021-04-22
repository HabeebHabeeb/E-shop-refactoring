<?php

    namespace App\Model;
    use PDO;
    use PDOException;
    use App\Model\Session;

    class Database
    {
        private $host = 'b75c1571138218';
        private $user = 'us-cdbr-east-03.cleardb.com';
        private $pwd = "811bc39b";
        private $db = 'heroku_69db236258c48db';

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
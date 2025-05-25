<?php
    class Database{
        //set database settings
        private $host = 'localhost';
        private $db = 'filmblog_db';
        private $user = 'root';
        private $pass = '';
        private $charset = 'utf8';
        private $pdo;

        //constructor for connecting to database through pdo and dsn
        public function __construct(){
            $dsn= "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            try{
                $this->pdo = new PDO($dsn, $this->user, $this->pass);
                //throws error when something goes wrong
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $e){
                die('Connection failed: '.$e->getMessage());
            }
            
        }

        //method for connection
        public function getConnection(){
            return $this->pdo;
    }

}
?>
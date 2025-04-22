<?php
    class Database{
        private $host = 'localhost';
        private $db = 'filmblog_db';
        private $user = 'root';
        private $pass = '';
        private $charset = 'utf8';
        private $pdo;

        public function __construct(){
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            try{
                $this->pdo = new PDO($dsn, $this->user, $this->pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){
                die('Connection failed: '.$e->getMessage());
            }
            
        }

        public function getConnection() {
            return $this->pdo;
    }

    public function getAllArticles() {
        $sql = "SELECT id, title, created_at FROM articles ORDER BY created_at DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
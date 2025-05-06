<?php
class MainPage{

    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    //method for getting last three articles
    public function getLastArticles($limit = 3){
        //sql query that needs to be done
        $sql = "SELECT id, title, content, created_at FROM articles ORDER BY created_at DESC LIMIT :limit";
        $stmt = $this->pdo->prepare($sql);
        //ensures the value is integer
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        //executes and returns as associative array
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
<?php

class AllPages{
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    //methond to get all articles
    public function getAllArticles(){
        $stmt = $this->pdo->query("SELECT id, title, created_at FROM articles ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
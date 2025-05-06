<?php
    class Article{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function getAllArticles(){
            $sql = "SELECT id, title, created_at FROM articles ORDER BY created_at DESC";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getArticleById($id){
            $sql = "SELECT * FROM articles WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function createArticle($title, $content, $rating){
            $stmt = $this->pdo->prepare("INSERT INTO articles (title, content, rating, created_at) VALUES (?, ?, ?, NOW())");
            return $stmt->execute([$title, $content, $rating]);
        }

        public function editArticle($id, $title, $content, $rating){
            $stmt = $this->pdo->prepare("UPDATE articles SET title = ?, content = ?, rating = ? WHERE id = ?");
            return $stmt->execute([$title, $content, $rating, $id]);
        }

        public function deleteArticle($id){
            $stmt = $this->pdo->prepare("DELETE FROM articles WHERE id = ?");
            return $stmt->execute([$id]);
        }
    }

?>
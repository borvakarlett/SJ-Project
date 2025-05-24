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

        //method for getting random three articles
        public function getRandomArticles($limit = 3) {
        // SQL query to select random articles
        $sql = "SELECT id, title, content, created_at FROM articles ORDER BY RAND() LIMIT :limit";
        $stmt = $this->pdo->prepare($sql);
        //ensure the values is integer
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        //execute and return as associative array
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    }

?>
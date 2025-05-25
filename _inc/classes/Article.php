<?php
    class Article{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        //method for getting all articles from db
        public function getAllArticles(){
            //
            $stmt = $this->pdo->prepare('SELECT id, title, created_at FROM articles ORDER BY created_at DESC');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //method which finds article by id
        public function getArticleById($id){
            $stmt = $this->pdo->prepare("SELECT * FROM articles WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        //method for creating article
        public function createArticle($title, $content, $rating){
            $stmt = $this->pdo->prepare('INSERT INTO articles (title, content, rating, created_at) VALUES (?, ?, ?, NOW())');
            return $stmt->execute([$title, $content, $rating]);
        }

        //method for editing article
        public function editArticle($id, $title, $content, $rating){
            $stmt = $this->pdo->prepare("UPDATE articles SET title = ?, content = ?, rating = ? WHERE id = ?");
            return $stmt->execute([$title, $content, $rating, $id]);
        }

        //method for deleting article
        public function deleteArticle($id){
            $stmt = $this->pdo->prepare("DELETE FROM articles WHERE id = ?");
            return $stmt->execute([$id]);
        }
        
        //method for getting last three articles
        public function getLastArticles($limit = 3){
        $stmt = $this->pdo->prepare( "SELECT id, title, content, created_at FROM articles ORDER BY created_at DESC LIMIT :limit");
        //ensures the value is integer
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        //executes and returns as associative array
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //method for getting random three articles
        public function getRandomArticles($limit = 3) {
        $stmt = $this->pdo->prepare("SELECT id, title, content, created_at FROM articles ORDER BY RAND() LIMIT :limit");
        //ensure the values is integer
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        //execute and return as associative array
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    }

?>
<?php
    class Comments{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }
    
        //method for adding comments
        public function addComment($article_id, $comment_name, $content){
            $stmt = $this->pdo->prepare("INSERT INTO comments (article_id, comment_name, content, created_at)
                                        VALUES (?, ?, ?, NOW())");
            return $stmt->execute([$article_id, $comment_name, $content]);
        }
    
        //get comments depending on whats the article id
        public function getCommentsByArticleId($article_id){
            $stmt = $this->pdo->prepare("SELECT comment_name, created_at, content FROM comments WHERE article_id = ? ORDER BY created_at DESC");
            $stmt->execute([$article_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //get all the comments from db
        public function getAllComments(){
            $stmt = $this->pdo->prepare("SELECT comments.id, comments.comment_name, comments.content, comments.created_at, comments.article_id, articles.title AS article_title
                                        FROM comments JOIN articles ON comments.article_id = articles.id
                                        ORDER BY comments.created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        //delete comment
        public function deleteComment($id){
            $stmt = $this->pdo->prepare("DELETE FROM comments WHERE id = ?");
            return $stmt->execute([$id]);
        }
        
    }
?>
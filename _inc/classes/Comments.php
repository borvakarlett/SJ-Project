<?php
    class Comments{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }
    
        //get comments depending on whats the article id
        public function getCommentsByArticleId($article_id){
            $stmt = $this->pdo->prepare("SELECT comment_name, created_at, content FROM comments WHERE article_id = ? ORDER BY created_at DESC");
            $stmt->execute([$article_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //methof which processes the comments
        public function commentSubmission($commentData){
        //gets rid of spaces and checks if it's empty
        $article_id= trim($commentData['article_id'] ?? '');
        $comment_name= trim($commentData['comment_name'] ?? '');
        $comment_text= trim($commentData['comment_text'] ?? '');
        //if everything is filled, uses the method for saving the comment and redirects to back to article
        if($article_id && $comment_name && $comment_text){
            $this->saveComment($article_id, $comment_name, $comment_text);
            header("Location: article.php?id=$article_id");
            exit;
        }
        }

        //method for saving the comment in the db
        public function saveComment($article_id, $comment_name, $comment_text){
        $stmt = $this->pdo->prepare("INSERT INTO comments (article_id, comment_name, content, created_at) VALUES (?, ?, ?, NOW())");
        return $stmt->execute([$article_id, $comment_name, $comment_text]);
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
<?php
    class Messages{

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function saveMessage($name, $email, $message){
        $stmt = $this->pdo->prepare("INSERT INTO messages (name, email, message, created_at) VALUES (?, ?, ?, NOW())");
        return $stmt->execute([$name, $email, $message]);
    }

    public function getAllMessages(){
        $stmt = $this->pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteMessage($id){
        $stmt = $this->pdo->prepare("DELETE FROM messages WHERE id = ?");
        return $stmt->execute([$id]);
    }
    }
?>
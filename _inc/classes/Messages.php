<?php
    class Messages{

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    //method for saving the message in the db
    public function saveMessage($name, $email, $message){
        $stmt = $this->pdo->prepare("INSERT INTO messages (name, email, message, created_at) VALUES (?, ?, ?, NOW())");
        return $stmt->execute([$name, $email, $message]);
    }

    //methof which processes the message
    public function messageSubmission($postData){
        //gets rid of spaces and checks if it's empty
        $name= trim($postData['name'] ?? '');
        $email= trim($postData['email'] ?? '');
        $message= trim($postData['message'] ?? '');
        //if everything is filled, uses the method for saving the message and redirects to thank you page
        if($name && $email && $message){
            $this->saveMessage($name, $email, $message);
            header("Location: thank-you.php");
            exit;
        }else{
            //error if not filled
            echo "<p class='error_msg'>Please fill in all fields.</p>";
        }
    }

    //method for getting all messages from db
    public function getAllMessages(){
        $stmt = $this->pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //method for deleting messages
    public function deleteMessage($id){
        $stmt = $this->pdo->prepare("DELETE FROM messages WHERE id = ?");
        return $stmt->execute([$id]);
    }
    }
?>
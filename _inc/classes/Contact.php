<?php

class Contact {

    private $msg;

    public function __construct(){
        $db = new Database();
        $pdo = $db->getConnection();
        $this->msg = new Messages($pdo);
    }

    public function messageSubmission($postData){
        $name = trim($postData['name'] ?? '');
        $email = trim($postData['email'] ?? '');
        $message = trim($postData['message'] ?? '');

        if ($name && $email && $message){
            $this->msg->saveMessage($name, $email, $message);
            header("Location: thank-you.php");
            exit;
        } else{
            echo "<p class='error_msg'>Please fill in all fields.</p>";
        }
    }
}

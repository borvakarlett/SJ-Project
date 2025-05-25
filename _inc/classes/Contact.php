<?php

class Contact {

    private $msg;

    public function __construct(){
        $db = new Database();
        $pdo = $db->getConnection();
        $this->msg = new Messages($pdo);
    }

    //methof which processes the message
    public function messageSubmission($postData){
        //gets rid of spaces and checks if it's empty
        $name= trim($postData['name'] ?? '');
        $email= trim($postData['email'] ?? '');
        $message= trim($postData['message'] ?? '');
        //if everything is filled, uses the method for saving the message and redirects to thank you page
        if($name && $email && $message){
            $this->msg->saveMessage($name, $email, $message);
            header("Location: thank-you.php");
            exit;
        }else{
            //error if not filled
            echo "<p class='error_msg'>Please fill in all fields.</p>";
        }
    }
}

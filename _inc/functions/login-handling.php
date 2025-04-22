<?php
    require_once '_inc/classes/Database.php';
    //password validation
    function validatePassword($username,$password){
        $db = new Database();
        $pdo= $db->getConnection();

        $stmt = $pdo->prepare("SELECT password_hash FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['password_hash'])){
            return true;
        }

        return false;
    }
?>
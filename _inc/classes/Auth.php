<?php

class Auth {
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    // password validation
    public function validatePassword($username, $password){
        $stmt = $this->pdo->prepare("SELECT password_hash FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //password verify checks hashed password
        return $user && password_verify($password, $user['password_hash']);
    }

    //login with session
    public function login($username){
        $_SESSION['username'] = $username;
    }

    //check if admin is logged in
    public function isAdminLoggedIn(){
        return isset($_SESSION['username']);
    }

    //if admin is not logged in redirect
    public function requireAdminLogin(){
        if (!$this->isAdminLoggedIn()){
            header('Location: admin_login.php');
            exit;
        }
    }


    //logging out, destroying cookies and session
    public function logout(){
        //emptying session
        $_SESSION = [];

        //check if cookies are being used
        if(ini_get("session.use_cookies")){
            $params = session_get_cookie_params();
            //overwriting cookies with empty value and expired timestamp
            setcookie(session_name(),'', time() - 42000, 
                $params["path"], 
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        //kills the session
        session_destroy();
        //redirects to login page
        header('Location: admin_login.php');
        exit;
    }
}
?>
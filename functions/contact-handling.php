<?php
//getting data from contact page
function handle_contact() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!empty($name) && !empty($email) && !empty($message)) {
            // here add stuff like adding in database later

            // Redirect
            header("Location: thank-you.php");
            exit();
        } else {
            return "All fields are required!";
        }
    }
}
?>
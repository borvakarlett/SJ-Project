<?php
    include('_inc/partials/head.php');

    //auth object for handling authorization
    $auth = new Auth();

    //after submission get the username and password or empty string
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        
        //using auth class function, we check if the password and usernames are valid
        if ($auth->validatePassword($username, $password)) {
            //if valid we log in and head to admin main page
            $auth->login($username);
            header('Location: admin_main.php');
            exit;
        } else {
            $error = "Incorrect username or password.";
        }
    }
?>

<body>
    <div id="templatemo_wrapper">
        <div id="templatemo_content">
            <div class="contact_form_section">
                <h2>Admin Login</h2>

                <?php if (!empty($error)): ?>
                    <p style="color: red; text-align:center; margin-bottom: 20px;"><?php echo $error; ?></p>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form_group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" required>
                    </div>

                    <div class="form_group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" required>
                    </div>

                    <input type="submit" value="Login" class="submit_button">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

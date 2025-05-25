<?php
include('_inc/partials/head.php');

$db = new Database();
$pdo = $db->getConnection();

//check if message was submited and if yes itcreates Contact object and passes the posted stuff there
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = new Messages($pdo);
    $contact->messageSubmission($_POST);
}


?>

<body>
<div id="templatemo_wrapper">
    <div id="templatemo_left_column">
        <!--menu-->
        <?php include('_inc/partials/header.php'); ?>
        <div id="templatemo_sidebar"></div>
    </div>

    <div id="templatemo_content">
        <div class="contact_form_section">
            <h2>Contact</h2>
            <p class="contact_intro">
                Feel free to write me some movie suggestions or tell me if there's something you don't like. I'm always open to feedback!
            </p>
            <!--contact form-->
            <form method="POST" action="">
                <div class="form_group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required />
                </div>

                <div class="form_group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div class="form_group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="submit_button">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include('_inc/partials/footer.php'); ?>
</body>
</html>

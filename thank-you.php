<?php
    include('partials/head.php');
    include('functions/contact-handling.php');
?>
<body>

<div id="templatemo_wrapper">
<div id="templatemo_left_column">
        <?php
            include('partials/header.php');
        ?>
    </div>

    <div id="templatemo_content">
        <div class="thank_you">
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $contact_name = $_POST['name'];
                if(!empty($contact_name)){
                  echo "<h2>Thank You for Your Message, $contact_name!</h2>";
                }
            }
            ?>
            <p>We have received your message and will get back to you shortly.</p>
            <p>In the meantime, feel free to explore the rest of the website.</p>
        </div>
    </div>
</div>

</body>
</html>
<!--footer-->
<?php
    include('partials/footer.php');
?>
</body>
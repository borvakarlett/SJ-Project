<?php
    include('_inc/partials/head.php');
    include('_inc/functions/contact-handling.php');
    handle_contact();
?>
<body>
<div id="templatemo_wrapper">
    <div id="templatemo_left_column">
        <?php
            include('_inc/partials/header.php');
        ?>
        
        <div id="templatemo_sidebar">
            <!-- Sidebar content (if any) -->
        </div>
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_content">
        <div class="contact_form_section">
            <h2>Contact Us</h2>
            <form action="thank-you.php" method="POST">
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
    </div> <!-- end of templatemo_content -->
</div> <!-- end of templatemo_wrapper -->

<!--footer-->
<?php
    include('_inc/partials/footer.php');
?>
</body>
</html>

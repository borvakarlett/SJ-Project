<?php
//gets the php page name
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
        <div id="site_title">
            <h1><a href="index.php">Film World<span>Film Blog</span></a></h1>
        </div>
        
        <nav id="templatemo_menu">
    <!--adds current class depending on which page are we on-->        
    <ul>
        <li><a href="index.php" class="<?= $currentPage === 'index.php' ? 'current' : ''?>">Home</a></li>
        <li><a href="all_pages.php" class="<?= $currentPage === 'all_pages.php' ? 'current' : ''?>">All Articles</a></li>
        <li><a href="contact.php" class="<?= $currentPage === 'contact.php' ? 'current' : ''?>">Contact</a></li>
    </ul>    	
</nav>
</header>
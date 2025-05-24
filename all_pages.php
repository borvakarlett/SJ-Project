<?php
    include('_inc/partials/head.php');


    $db = new Database();
    $pdo = $db->getConnection();
    $allPages = new Article($pdo);
    //get all articles from database
    $articles = $allPages->getAllArticles();
?>
<body>
<div id="templatemo_wrapper">
    <div id="templatemo_left_column">
        <?php include('_inc/partials/header.php'); ?>
        <div id="templatemo_sidebar"></div>
    </div> <!-- end of templatemo_left_column -->

    <div id="templatemo_content">
        <h1>All Articles</h1>
        <div class="all_articles_list">
            <?php foreach ($articles as $article): ?>
                <div class="article_list_item">
                    <h2>
                        <a href="article.php?id=<?= $article['id'] ?>">
                            <?= htmlspecialchars($article['title']) ?>
                        </a>
                        
                    </h2>
                    <p class="article_date">
                        <!--full month, day without zeroes, year-->
                        <?= date('F j, Y', strtotime($article['created_at'])) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div> <!-- end of content -->

</div> <!-- end of templatemo_wrapper -->

<?php include('_inc/partials/footer.php'); ?>
</body>
</html>
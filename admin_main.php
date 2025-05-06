<?php
    include('_inc/partials/head.php');

    //checks if admin is logged in and if not redirect to login page
    $auth->requireAdminLogin();

    $db = new Database();
    $pdo = $db->getConnection();

    $article = new Article($pdo);

    //function to get all articles from database
    $articles = $article->getAllArticles();

    //if delete is passed, then article gets deleted and redirects back to the main page   
    if (isset($_GET['delete'])) {
        $articleId = $_GET['delete'];
        $article->deleteArticle($articleId);
        header("Location: admin_main.php");
        exit;
    }
?>


<body>

<div id="templatemo_content">
    <div class="admin_topbar">
        <div class="left_buttons">
            <a href="admin_comments.php" class="submit_button">Comments</a>
            <a href="admin_messages.php" class="submit_button">Messages</a>
            <a href="admin_create.php" class="submit_button">+ New Article</a>
        </div>
        <div class="right_buttons">
            <a href="logout.php" class="submit_button logout_button">Logout</a>
        </div>
        <div class="cleaner"></div>
</div>

            <?php if (($articles)): ?>
                <!--print each article with just til and date-->
                <?php foreach ($articles as $article): ?>
                    <div class="post_section">
                        <h2><?= htmlspecialchars($article['title']) ?></h2>
                        <div class="post_content">
                            <p><strong>Date:</strong> <?= date('F j, Y', strtotime($article['created_at'])) ?></p>
                            <p>
                                <!--button to edit and redirect to edit page-->
                                <a href="admin_edit.php?id=<?= $article['id'] ?>">Edit</a>
                                <!--button to delete-->
                                <a href="?delete=<?= $article['id'] ?>" onclick="return confirm('Are you sure you want to delete this article?')">Delete</a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No articles available yet.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
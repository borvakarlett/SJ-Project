<?php
    include('_inc/partials/head.php');

    $db = new Database();
    $pdo = $db->getConnection();

    //check if we have article ID
    if(!isset($_GET['id'])) {
        echo "No article ID provided.";
        //exit if not
        exit;
    }

    //creating article object to get article by id
    $articleObj = new Article($pdo);
    $article = $articleObj->getArticleById($_GET['id']);

    //create commentobject to get comments by artilce id
    $commentObj = new Comments($pdo);
    $comments = $commentObj->getCommentsByArticleId($_GET['id']);

    //if posted, then send content to comment submission method in comments
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commentObj->commentSubmission($_POST);
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
        <?php if ($article):?> <!--if article found-->
            <div class="article_detail">
                <!--print title, rating and content-->
                <h1><?=htmlspecialchars($article['title'])?></h1>
                <p class="article_rating"><em><?=htmlspecialchars($article['rating'])?>/10</em></p>
                <div class="article_body">
                    <!--nl2br turns \n int <\b>-->
                    <p><?=nl2br(htmlspecialchars($article['content']))?></p>
                </div>
            </div>


            <!--comment section-->
            <div class="comment_section">
                <h2>Leave a Comment</h2>
                <!--redirects to comment_submit.php where the submit gets processed-->
                <form method="POST" action="">
                    <input type="hidden" name="article_id" value="<?=$article['id']?>">
                    
                    <div class="form_group">
                        <label for="comment_name">Name:</label>
                        <input type="text" id="comment_name" name="comment_name" required>
                    </div>
                    
                    <div class="form_group">
                        <label for="comment_text">Your Comment:</label>
                        <textarea id="comment_text" name="comment_text" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit_button">Submit Comment</button>
                </form>

                <!--all comments on article-->
                <?php if(!empty($comments)):?>
                    <div class="comment_list">
                    <h2>Comments</h2>
                    <!--for every comment under this artilce-->
                    <?php foreach ($comments as $comment):?>
                    <div class="comment_item">
                            <!--print the comment name, date and content-->
                            <p><strong><?=htmlspecialchars($comment['comment_name'])?></strong> 
                            </br> 
                            <?=date('F j, Y H:i', strtotime($comment['created_at']))?>:</p>
                            <p><?=nl2br(htmlspecialchars($comment['content']))?></p>
                    </div>
                    <?php endforeach; ?>
                    </div>
                <?php else:?>
                    <p>No comments yet. Be the first to comment!</p>
                <?php endif; ?>

            </div>
        <?php else: ?>
            <p>Article not found.</p>
        <?php endif; ?>
    </div>
</div>

<?php include('_inc/partials/footer.php'); ?>
</body>
</html>
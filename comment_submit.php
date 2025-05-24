<?php
require_once('_inc/autoload.php');

//after request post get article id and other info
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article_id=$_POST['article_id'];
    $display_name=$_POST['display_name'];
    $comment_text=$_POST['comment_text'];

    //if everything is filled add it to database
    if (!empty($article_id) && !empty($display_name) && !empty($comment_text)) {
        $db= new Database();
        $pdo= $db->getConnection();
        $commentObj= new Comments($pdo);
        $commentObj->addComment($article_id, $display_name, $comment_text);
    }

    header("Location: article.php?id=$article_id");
    exit;
}
?>
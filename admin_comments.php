<?php
include('_inc/partials/head.php');

$auth->requireAdminLogin();

$db = new Database();
$pdo = $db->getConnection();

$commentObj = new Comments($pdo);

//delete comment
if(isset($_GET['delete_id'])) {
    $commentObj->deleteComment($_GET['delete_id']);
    header("Location: admin_comments.php");
    exit;
}

$comments = $commentObj->getAllComments();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Manage Comments</title>
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
<div id="templatemo_content">
    <div class="admin_topbar">
        <h2>All Comments</h2>
        <div class="right_buttons">
            <a href="admin_main.php" class="submit_button">Back to Dashboard</a>
        </div>
    </div>

    <!--printing out comments-->
    <?php if (($comments)): ?>
        <?php foreach ($comments as $comment): ?>
            <div class="post_section">
                <h3><?= htmlspecialchars($comment['comment_name']) ?> on 
                    <em><?= htmlspecialchars($comment['article_title']) ?></em>
                </h3>
                <p><strong>Date:</strong> <?= date('F j, Y H:i', strtotime($comment['created_at'])) ?></p>
                <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                <a href="?delete_id=<?= $comment['id'] ?>" class="submit_button logout_button">Delete</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No comments found.</p>
    <?php endif; ?>
</div>
</body>
</html>